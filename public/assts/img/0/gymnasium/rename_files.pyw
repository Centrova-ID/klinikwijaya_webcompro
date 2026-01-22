import os
import tkinter as tk
from tkinter import simpledialog, messagebox
from PIL import Image, ImageOps # Tambahkan ImageOps

def process_images():
    folder_path = os.path.dirname(os.path.realpath(__file__))
    
    root = tk.Tk()
    root.withdraw()
    root.attributes("-topmost", True)

    new_name = simpledialog.askstring("Rename & Convert", "Masukkan nama dasar:", parent=root)

    if new_name:
        extensions = ('.jpg', '.jpeg', '.png', '.JPG', '.JPEG', '.PNG')
        files = [f for f in os.listdir(folder_path) if f.lower().endswith(extensions)]
        files.sort()

        count = 1
        for filename in files:
            if filename.startswith("rename_and_convert"):
                continue
                
            file_path = os.path.join(folder_path, filename)
            
            try:
                with Image.open(file_path) as img:
                    # --- BAGIAN PERBAIKAN ROTASI ---
                    # Mengoreksi posisi gambar berdasarkan data EXIF
                    img = ImageOps.exif_transpose(img) 
                    # -------------------------------

                    new_filename = f"{new_name}-{count}.webp"
                    dst_path = os.path.join(folder_path, new_filename)
                    
                    if img.mode in ("RGBA", "P"):
                        img = img.convert("RGB")
                    
                    img.save(dst_path, "WEBP", quality=25)
                
                os.remove(file_path)
                count += 1
            except Exception as e:
                print(f"Gagal memproses {filename}: {e}")

        messagebox.showinfo("Selesai", f"Berhasil memproses {count-1} file.", parent=root)
    
    root.destroy()

if __name__ == "__main__":
    process_images()