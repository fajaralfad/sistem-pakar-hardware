# 🔧 Sistem Pakar Diagnosis Kerusakan Hardware Laptop (Techmedix)

Sebuah sistem pakar berbasis web yang membantu pengguna mendiagnosis permasalahan hardware pada laptop secara efektif dan akurat. Sistem ini menggunakan metode forward chaining untuk menganalisis gejala-gejala yang dipilih pengguna dan memberikan diagnosis beserta rekomendasi solusi.

## ✨ Fitur Utama

- **Diagnosis Interaktif**: Interface yang user-friendly untuk memilih gejala-gejala kerusakan
- **Analisis Real-time**: Proses analisis cepat berdasarkan basis pengetahuan yang komprehensif
- **Rekomendasi Solusi**: Saran penanganan masalah yang praktis dan mudah dipahami
- **Riwayat Diagnosis**: Pencatatan history diagnosis untuk referensi di masa mendatang
- **Basis Pengetahuan**: Database lengkap mencakup berbagai jenis kerusakan hardware laptop

## 🛠 Teknologi yang Digunakan

- **Framework**: Laravel 10
- **Frontend**: Tailwind CSS 
- **Database**: MySQL
- **Server**: Apache/Nginx

## 📋 Prasyarat

Sebelum menginstall aplikasi, pastikan sistem anda memenuhi persyaratan berikut:

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL/MariaDB

## 🚀 Cara Instalasi

1. Clone repository
```bash
git clone https://github.com/username/laptop-diagnosis-expert-system.git
cd laptop-diagnosis-expert-system
```

2. Install dependencies
```bash
composer install
npm install
```

3. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Konfigurasi database di file .env
```
DB_DATABASE=laptop_diagnosis
DB_USERNAME=root
DB_PASSWORD=
```

5. Migrasi database
```bash
php artisan migrate
php artisan db:seed
```

6. import database
```bash
gunakan file sql yang tertera
```

6. Jalankan aplikasi
```bash
php artisan serve
npm run dev
```

## 💡 Cara Penggunaan

1. Akses aplikasi melalui browser
2. Pilih gejala-gejala kerusakan yang dialami
3. Sistem akan menganalisis input dan memberikan diagnosis
4. Lihat rekomendasi solusi yang diberikan
5. Diagnosis akan terseimpan ke dalam riwayat diagnosis (sebelah icon kanan untuk dashboard admin pada navbar)

## 📝 Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE)

## 📞 Kontak

Jika Anda memiliki pertanyaan atau saran, silakan hubungi:
- Email: [fajaralfad85@gmail.com](mailto:fajaralfad85@gmail.com)

Dibuat oleh [Techmedix team]
