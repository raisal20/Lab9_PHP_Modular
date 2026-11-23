# Praktikum 9 — PHP Modular (Pemrograman Web)

## 1. Tujuan Project

Project ini dibuat untuk menerapkan konsep modularisasi program pada PHP dengan memisahkan bagian aplikasi ke dalam file dan direktori yang memiliki tanggung jawab jelas, meliputi penggunaan `include`/`require`/`require_once`, template halaman bersama (`header` dan `footer`), `function` beserta file helper, struktur direktori modular, _routing_ berbasis parameter URL dengan _whitelist_ dan halaman `404`, serta integrasi dengan aplikasi database/CRUD dari praktikum sebelumnya.

## 2. Kebutuhan Perangkat

- Pemahaman dasar PHP (variabel, percabangan, perulangan, array, dan pemrosesan form).
- Project aplikasi database/CRUD dari praktikum sebelumnya.
- Web server lokal (seperti Apache melalui XAMPP/Laragon), PHP, dan browser.
- Visual Studio Code atau editor kode sejenis.
- _(Opsional untuk URL rewrite)_ Apache dengan `mod_rewrite` aktif dan `AllowOverride` yang sesuai.

## 3. Cara Menjalankan Aplikasi

1. Letakkan folder latihan (`lab9_php_modular`) dan folder proyek utama (`project`) ke dalam _docroot_ web server lokal (misalnya `htdocs` pada XAMPP atau `www` pada Laragon).
2. Aktifkan layanan **Apache** (dan **MySQL** apabila menjalankan fitur/koneksi database).
3. **Menjalankan latihan awal (`lab9_php_modular`):**
   - Uji pemanggilan file (`uji-include.php` dan `pesan.php`), termasuk mengamati perbedaan `include` dan `require` saat file tidak ditemukan.
   - Uji template layout bersama (`header.php`, `footer.php`, `home.php`, `about.php`, dan `style.css`).
   - Uji `function` dan file helper (`helpers.php`).
4. **Menjalankan proyek utama (`project`):**
   - Buka `http://localhost/project/index.php` untuk menampilkan `dashboard`.
   - Uji rute terdaftar seperti `index.php?page=user/list` dan `index.php?page=user/add`.
   - Uji parameter `page` yang tidak terdaftar (misalnya `?page=admin/rahasia`), kosong, atau tidak sesuai tipe untuk memastikan halaman `404` tampil secara aman.
   - Jika menggunakan `.htaccess`, uji jalur seperti `/project/user/list` dan pastikan `mod_rewrite` serta `AllowOverride` sudah aktif.

## 4. Struktur Direktori

```text
lab9_php_modular/
├── pesan.php
├── uji-include.php
├── header.php
├── footer.php
├── home.php
├── about.php
├── kontak.php
└── style.css

project/
├── .htaccess
├── index.php
├── config/
│   └── database.php
├── views/
│   ├── header.php
│   ├── footer.php
│   ├── dashboard.php
│   └── 404.php
├── helpers/
│   └── functions.php
├── modules/
│   ├── user/
│   │   ├── list.php
│   │   ├── add.php
│   │   ├── edit.php
│   │   └── delete.php
│   └── auth/
│       ├── login.php
│       └── logout.php
└── assets/
    ├── css/
    └── js/
```

5. Daftar RuteNilai Parameter pageFile TujuanKeterangandashboard (default)views/dashboard.phpHalaman utama / dashboard aplikasiuser/listmodules/user/list.phpMenampilkan daftar penggunauser/addmodules/user/add.phpMenampilkan form tambah penggunauser/editmodules/user/edit.phpMenampilkan form ubah data penggunaRute tidak terdaftar / tidak validviews/404.phpMengembalikan status HTTP 404 secara aman via whitelist
