# Klinik Wijaya - Company Profile Website

Website Company Profile untuk Klinik Wijaya yang dibangun menggunakan Laravel framework.

---

## 📋 Daftar Isi
- [Persyaratan Sistem](#persyaratan-sistem)
- [Panduan Instalasi](#panduan-instalasi)
- [Konfigurasi Laravel Herd](#konfigurasi-laravel-herd)
- [Setup Database](#setup-database)
- [Menjalankan Aplikasi](#menjalankan-aplikasi)
- [Fitur Aplikasi](#fitur-aplikasi)

---

## 🔧 Persyaratan Sistem

Sebelum memulai instalasi, pastikan komputer Anda memiliki:
- **Windows 10/11** (64-bit)
- **RAM minimal 4GB** (disarankan 8GB)
- **Storage kosong minimal 2GB**
- **Koneksi internet** untuk download dependensi

---

## 📥 Panduan Instalasi

### 1. Download dan Install Laravel Herd

Laravel Herd adalah local development environment yang mudah dan cepat untuk Laravel di Windows.

#### Langkah-langkah:

1. **Download Laravel Herd**
   - Kunjungi website resmi: [https://herd.laravel.com](https://herd.laravel.com)
   - Klik tombol **"Download for Windows"**
   - Tunggu sampai file installer selesai didownload (sekitar 400-500MB)

2. **Install Laravel Herd**
   - Buka file installer yang sudah didownload (biasanya di folder Downloads)
   - Double-click file `Herd-Setup-x.x.x.exe`
   - Ikuti wizard instalasi:
     - Klik **"Next"**
     - Pilih lokasi instalasi (biarkan default)
     - Klik **"Install"**
     - Tunggu proses instalasi selesai (5-10 menit)
     - Klik **"Finish"**

3. **Buka Laravel Herd**
   - Setelah instalasi selesai, Herd akan otomatis terbuka
   - Atau cari "Herd" di Start Menu
   - Icon Herd akan muncul di system tray (pojok kanan bawah)

4. **Konfigurasi Awal Herd**
   - Klik icon Herd di system tray
   - Pastikan PHP dan Node.js sudah ter-install (akan terlihat versinya)
   - Herd sudah include:
     - ✅ PHP 8.2+
     - ✅ Composer
     - ✅ Node.js & NPM
     - ✅ MySQL/PostgreSQL
     - ✅ Redis

---

### 2. Clone atau Download Project

```bash
# Jika menggunakan Git
git clone https://github.com/Centrova-ID/klinikwijaya_webcompro.git
cd klinikwijaya_comproweb

# Atau download ZIP dari GitHub dan extract
```

---

### 3. Setup Project dengan Herd

#### a. Pindahkan Project ke Folder Herd

1. **Buka Herd**
   - Klik icon Herd di system tray
   - Klik **"Open"** atau **"Settings"**

2. **Tambahkan Project Directory**
   - Di Herd, pergi ke tab **"Sites"** atau **"Paths"**
   - Klik **"Add Path"**
   - Pilih folder project Anda: `D:\Centrova\projects\Klinik Wijaya\klinikwijaya_comproweb`
   - Klik **"Save"**

3. **Atau copy project ke folder Herd default**
   ```bash
   # Biasanya di: C:\Users\[Username]\Herd
   # Copy folder project ke folder ini
   ```

#### b. Install Dependencies

Buka terminal di folder project (bisa menggunakan Command Prompt, PowerShell, atau terminal di VS Code):

```bash
# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install
```

---

## 🌐 Konfigurasi Laravel Herd

### Setup Domain Custom (klinikwijaya.test & app.klinikwijaya.test)

#### Cara 1: Menggunakan Herd GUI (Termudah)

1. **Buka Herd Application**
   - Klik icon Herd di system tray
   - Pilih **"Open Herd"**

2. **Setup Domain Utama (klinikwijaya.test)**
   - Klik tab **"Sites"**
   - Cari folder project Anda di list
   - Klik tombol **"Link"** atau **"Park"**
   - Masukkan nama domain: `klinikwijaya`
   - Domain akan otomatis menjadi: `klinikwijaya.test`
   - Klik **"Save"** atau **"Link"**

3. **Setup Subdomain (app.klinikwijaya.test)**
   - Masih di tab **"Sites"**
   - Klik **"Add Custom Domain"** atau **"+"**
   - Masukkan: `app.klinikwijaya.test`
   - Pilih folder yang sama dengan domain utama
   - Klik **"Save"**

#### Cara 2: Menggunakan Command Line (Alternatif)

Buka terminal dan jalankan:

```bash
# Masuk ke folder project
cd "D:\Centrova\projects\Klinik Wijaya\klinikwijaya_comproweb"

# Link domain utama
herd link klinikwijaya

# Untuk subdomain, edit file .env dan tambahkan konfigurasi subdomain
# Atau gunakan proxy manual di Herd settings
```

#### Cara 3: Manual Configuration (Advanced)

1. **Edit Herd Config**
   - Buka Herd Settings
   - Pergi ke **"Advanced"** atau **"Custom Domains"**
   
2. **Tambahkan Custom Sites**
   - Add site: `klinikwijaya.test` → point to project folder
   - Add site: `app.klinikwijaya.test` → point to project folder

3. **Restart Herd Services**
   - Klik **"Restart All Services"** di Herd

---

### Verifikasi Domain

Setelah setup domain, verifikasi dengan cara:

1. **Buka browser** (Chrome, Firefox, Edge)
2. **Akses URL:**
   - `http://klinikwijaya.test` - untuk website utama
   - `http://app.klinikwijaya.test` - untuk admin panel

3. **Jika muncul error "Site cannot be reached":**
   - Tunggu 10-30 detik (Herd perlu reload)
   - Restart Herd services
   - Clear browser cache (Ctrl + Shift + Del)
   - Pastikan folder project sudah benar

---

## 🗄️ Setup Database

### 1. Setup File Environment

```bash
# Copy file .env.example menjadi .env
copy .env.example .env

# Generate application key
php artisan key:generate
```

### 2. Konfigurasi Database di .env

Buka file `.env` dan edit konfigurasi database:

```env
# Untuk MySQL (default di Herd)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=klinikwijaya
DB_USERNAME=root
DB_PASSWORD=

# Atau gunakan SQLite untuk development sederhana
# DB_CONNECTION=sqlite
# DB_DATABASE=database/database.sqlite
```

### 3. Buat Database

#### Menggunakan Herd Database Manager:

1. **Buka Herd**
   - Klik icon Herd
   - Pilih **"Database"** atau **"MySQL"**

2. **Create Database**
   - Klik **"Create Database"**
   - Nama: `klinikwijaya`
   - Klik **"Create"**

#### Atau menggunakan Command Line:

```bash
# Akses MySQL via Herd
herd mysql

# Di MySQL prompt, jalankan:
CREATE DATABASE klinikwijaya;
EXIT;
```

### 4. Jalankan Migration dan Seeder

```bash
# Jalankan migration untuk membuat tabel
php artisan migrate

# Isi database dengan data dummy (opsional)
php artisan db:seed
```

---

## ▶️ Menjalankan Aplikasi

### 1. Compile Assets (CSS & JavaScript)

```bash
# Development mode (auto-reload saat ada perubahan)
npm run dev

# Atau build untuk production
npm run build
```

### 2. Akses Website

Dengan Laravel Herd, server sudah otomatis running! Tinggal buka browser:

- **Website Utama:** `http://klinikwijaya.test`
- **Admin Panel:** `http://app.klinikwijaya.test`

### 3. Login Admin (jika sudah ada seeder)

```
Email: admin@klinikwijaya.com
Password: password
```

---

## ✨ Fitur Aplikasi

### Public Website (klinikwijaya.test)
- 🏠 Homepage
- 📝 Artikel & Berita
- 📅 Event & Kegiatan
- 🏥 Informasi Layanan
- 🏢 Tentang Klinik
- 📸 Galeri Foto
- 📞 Kontak & Lokasi

### Admin Panel (app.klinikwijaya.test)
- 📊 Dashboard
- ✍️ Manajemen Artikel
- 📆 Manajemen Event
- 🗂️ Manajemen Kategori
- 👥 Manajemen User
- 🖼️ Upload Gambar

---

## 🛠️ Troubleshooting

### Domain tidak bisa diakses
```bash
# Restart Herd services
# Buka Herd → Settings → Restart All Services

# Clear cache DNS Windows
ipconfig /flushdns

# Restart browser
```

### Error 500 saat akses website
```bash
# Pastikan storage permissions sudah benar
php artisan storage:link

# Clear semua cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

### npm install error
```bash
# Hapus folder node_modules dan file lock
Remove-Item -Recurse -Force node_modules
Remove-Item package-lock.json

# Install ulang
npm install
```

### Composer install error
```bash
# Update composer
composer self-update

# Clear composer cache
composer clear-cache

# Install ulang
composer install
```

---

## 📞 Bantuan & Support

Jika mengalami kesulitan dalam setup, hubungi:
- **Developer:** Centrova Team
- **Email:** support@centrova.id
- **Repository:** [GitHub Issues](https://github.com/Centrova-ID/klinikwijaya_webcompro/issues)

---

## 📝 License

Project ini dikembangkan dengan Laravel Framework.
Laravel is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
