<p align="center"><a href="https://aifa-kreatif.biz.id" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Open Kampus Logo"></a></p>

<p align="center">
<a href="https://github.com/open-kampus/framework/actions"><img src="https://github.com/open-kampus/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/open-kampus/framework"><img src="https://img.shields.io/packagist/dt/open-kampus/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/open-kampus/framework"><img src="https://img.shields.io/packagist/v/open-kampus/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/open-kampus/framework"><img src="https://img.shields.io/packagist/l/open-kampus/framework" alt="License"></a>
</p>

## About Open Kampus
Open-Kampus adalah sistem informasi akademik internal untuk perguruan tinggi yang dikembangkan menggunakan Laravel. Proyek ini bertujuan untuk menyediakan solusi manajemen akademik yang efisien, fleksibel, dan dapat dikembangkan lebih lanjut oleh komunitas.

## 🎯 Task List dan Rencana Pengembangan

### 🚀 Fitur Utama
- [ ] Manajemen Data Master
  - [ ] Mahasiswa
  - [ ] Pegawai
  - [ ] Orang Tua
  - [ ] Fakultas
  - [ ] Program Studi
  - [ ] Periode
  - [ ] Mata Kuliah
  - [ ] Kelas
  - [ ] Gedung
  - [ ] Ruangan
  - [ ] User
- [ ] Manajemen Data Administrasi
  - [ ] KRS
  - [ ] KHS
  - [ ] Transkrip Nilai Sementara
  - [ ] Jadwal Kuliah
- [ ] Sistem evaluasi dan penilaian akademik

### 🔄 Refactoring
- [ ] Mengoptimasi stuktur database

## 🚀 Cara Berkontribusi
Kami mengundang komunitas untuk ikut serta dalam pengembangan Open-Kampus! Berikut adalah cara berkontribusi:

### 1. Fork & Clone Repository
Fork repositori ini dan clone ke dalam mesin lokal Anda:
```bash
 git clone https://github.com/open-kampus/open-kampus.git
```

### 2. Setup Proyek
1. Install dependencies:
   ```bash
   composer install
   npm install
   ```
2. Copy file `.env.example` ke `.env` dan sesuaikan konfigurasi database:
   ```bash
   cp .env.example .env
   ```
3. Generate key aplikasi:
   ```bash
   php artisan key:generate
   ```
4. Jalankan migrasi database:
   ```bash
   php artisan migrate --seed
   ```
5. Jalankan server lokal:
   ```bash
   php artisan serve
   ```

### 3. Buat Perubahan & Kirim Pull Request
1. Buat branch baru:
   ```bash
   git checkout -b fitur-baru
   ```
2. Lakukan perubahan dan commit:
   ```bash
   git commit -m "Menambahkan fitur baru"
   ```
3. Push ke repository Anda:
   ```bash
   git push origin fitur-baru
   ```
4. Buat Pull Request ke branch `master` dari repository utama.

## 🛠 Panduan Kontribusi
- Pastikan kode yang ditambahkan sesuai dengan standar Laravel.
- Gunakan format coding yang rapi dan terdokumentasi dengan baik.
- Jika menambahkan fitur baru, sertakan dokumentasi singkat dalam README.
- Pastikan perubahan telah diuji sebelum mengirim Pull Request.

### 🧪 Testing
- [ ] Menulis unit test untuk masing-masing fitur
- [ ] Melakukan testing integrasi
- [ ] Melakukan testing performa

## 💬 Diskusi & Dukungan
Bergabunglah dengan komunitas kami untuk berdiskusi dan mendapatkan dukungan lebih lanjut:
- **GitHub Issues**: Laporkan bug atau minta fitur baru.
- **Forum Diskusi**: (Tambahkan tautan jika tersedia)
- **Discord/Telegram**: (Tambahkan tautan jika tersedia)

## 📜 Lisensi
Open-Kampus dikembangkan di bawah lisensi **Apache Licence 2.0**, sehingga dapat digunakan dan dikembangkan secara bebas oleh siapa saja.

---
Mari bersama membangun ekosistem akademik yang lebih baik dengan Open-Campus! 🎓🚀
