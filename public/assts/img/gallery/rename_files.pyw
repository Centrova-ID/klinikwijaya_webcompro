import os
import tkinter as tk
from tkinter import messagebox, Toplevel, Label, Entry, Button
from PIL import Image, ImageOps

class MultiDialog:
    def __init__(self, parent):
        self.result_name = None
        self.result_quality = 25
        self.mode = None
        
        self.top = Toplevel(parent)
        self.top.title("Image Processor Settings")
        self.top.geometry("400x280")
        self.top.attributes("-topmost", True)
        self.top.resizable(False, False)
        
        Label(self.top, text="Masukkan Nama Baru:", font=('Arial', 9, 'bold')).pack(pady=(15,0))
        self.entry_name = Entry(self.top, width=40)
        self.entry_name.pack(pady=5, padx=20)
        self.entry_name.focus_set()

        Label(self.top, text="Kualitas WebP (1-100):").pack(pady=(10,0))
        self.entry_quality = Entry(self.top, width=10)
        self.entry_quality.insert(0, "25")
        self.entry_quality.pack(pady=5)

        btn_frame = tk.Frame(self.top)
        btn_frame.pack(pady=20)

        # Tombol 1: Full Proses
        Button(btn_frame, text="Rename & Kecilkan", width=18, bg="#d4edda", 
               command=self.on_full_process).grid(row=0, column=0, padx=5, pady=5)
        
        # Tombol 2: Skip Rename (Tetap Kecilkan)
        Button(btn_frame, text="Skip Rename (Hanya Kecilkan)", width=22, 
               command=self.on_skip_rename).grid(row=0, column=1, padx=5, pady=5)
        
        # Tombol 3: Hanya Rename (PENTING: Untuk file yang sudah WebP)
        Button(btn_frame, text="Hanya Rename (Nama-1, Nama-2, dst)", width=35, bg="#fff3cd",
               command=self.on_only_rename).grid(row=1, column=0, columnspan=2, pady=10)

    def on_full_process(self):
        self.mode = 'full'
        self.result_name = self.entry_name.get()
        self.result_quality = int(self.entry_quality.get()) if self.entry_quality.get().isdigit() else 25
        self.top.destroy()

    def on_skip_rename(self):
        self.mode = 'skip_rename'
        self.result_quality = int(self.entry_quality.get()) if self.entry_quality.get().isdigit() else 25
        self.top.destroy()

    def on_only_rename(self):
        self.mode = 'only_rename'
        self.result_name = self.entry_name.get()
        self.top.destroy()

def process_images():
    folder_path = os.path.dirname(os.path.abspath(__file__))
    root = tk.Tk()
    root.withdraw()

    # TAMBAHKAN .webp ke dalam list ekstensi yang dicari
    extensions = ('.jpg', '.jpeg', '.png', '.webp', '.JPG', '.JPEG', '.PNG', '.WEBP')
    files = [f for f in os.listdir(folder_path) if f.lower().endswith(extensions)]
    
    if not files:
        messagebox.showwarning("File Tidak Ditemukan", f"Tidak ada file gambar di:\n{folder_path}")
        root.destroy()
        return

    dialog = MultiDialog(root)
    root.wait_window(dialog.top)

    if not dialog.mode:
        root.destroy()
        return

    files.sort()
    MAX_SIZE = (1920, 1080)
    count = 0

    for i, filename in enumerate(files):
        # Lewati file skrip
        if "rename_and_convert" in filename.lower():
            continue
            
        file_path = os.path.join(folder_path, filename)
        new_filename = ""
        
        try:
            # MODE HANYA RENAME (Sangat cepat karena tidak memproses ulang gambar)
            if dialog.mode == 'only_rename':
                new_filename = f"{dialog.result_name}-{i+1}.webp"
                dst_path = os.path.join(folder_path, new_filename)
                
                # Jika nama sudah sama, jangan lakukan apa-apa
                if os.path.abspath(file_path) == os.path.abspath(dst_path):
                    count += 1
                    continue
                
                # Rename langsung (mendukung file apa saja termasuk yang sudah .webp)
                os.rename(file_path, dst_path)
                count += 1
                continue

            # MODE PROSES (RESIZE & KOMPRESI)
            with Image.open(file_path) as img:
                img = ImageOps.exif_transpose(img) 
                
                if dialog.mode == 'skip_rename':
                    img.thumbnail(MAX_SIZE, Image.Resampling.LANCZOS)
                    base_name = os.path.splitext(filename)[0]
                    new_filename = f"{base_name}.webp"
                    quality_to_save = dialog.result_quality
                else: # mode 'full'
                    img.thumbnail(MAX_SIZE, Image.Resampling.LANCZOS)
                    new_filename = f"{dialog.result_name}-{i+1}.webp"
                    quality_to_save = dialog.result_quality

                dst_path = os.path.join(folder_path, new_filename)
                
                if img.mode in ("RGBA", "P"):
                    img = img.convert("RGB")
                
                img.save(dst_path, "WEBP", quality=quality_to_save)
            
            # Hapus file lama jika nama berubah atau ekstensi berubah
            if os.path.abspath(file_path) != os.path.abspath(dst_path):
                os.remove(file_path)
            
            count += 1

        except Exception as e:
            print(f"Gagal memproses {filename}: {e}")

    messagebox.showinfo("Selesai", f"Berhasil memproses {count} file.", parent=root)
    root.destroy()

if __name__ == "__main__":
    process_images()