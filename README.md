# Lab7Web_PHP - Praktikum 7: Pemrograman Server-Side dengan PHP

**Nama:** (isi nama)  
**NIM:** (isi NIM)  
**Kelas:** (isi kelas)

## Tujuan
- Memahami perbedaan client-side dan server-side.
- Menjalankan PHP melalui server lokal.
- Menggunakan variabel, operator, percabangan, perulangan, array, dan function.
- Memproses form GET/POST, validasi, dan sanitasi input (`htmlspecialchars()`).
- Membangun aplikasi sederhana penerima data mahasiswa.

## Perangkat
Laptop/PC, web browser, Visual Studio Code, PHP, XAMPP/Laragon (Apache).

## Cara Menjalankan
1. Jalankan **Apache** dari XAMPP Control Panel (atau *Start All* di Laragon).
2. Salin folder `Lab7Web_PHP` ke `C:\xampp\htdocs\` (Laragon: `C:\laragon\www\`).
3. Buka browser: `http://localhost/Lab7Web_PHP/` (jangan klik ganda file PHP).

## Struktur File
```
Lab7Web_PHP/
├── index.php               # menu
├── latihan1.php            # Menjalankan PHP
├── latihan2.php            # Variabel, operator, percabangan
├── latihan3.php            # Perulangan & array
├── latihan4.php            # Function
├── latihan5.php            # Form GET
├── latihan6.php            # Form POST
├── latihan7.php            # Pengolahan data (subtotal)
├── mini_project.php        # Formulir Data Mahasiswa
├── eksperimen_mandiri.php  # Eksperimen 1-5
├── screenshots/            # screenshot hasil
└── README.md
```

## Ringkasan Hasil
| Latihan | Hasil |
|---|---|
| 1 | PHP berjalan, waktu server tampil, kode PHP tidak tampil sebagai teks |
| 2 | Nilai akhir 84,30 → predikat B (Siti: 85/78/90) |
| 3 | 7 nama tampil dalam daftar bernomor dengan `foreach` |
| 4 | Diskon, luas persegi panjang, dan kelulusan berfungsi |
| 5 | URL berubah menjadi `?kata=...`, kata kunci tampil aman |
| 6 | Data tampil aman; input kosong ditolak; tag HTML ditampilkan sebagai teks |
| 7 | Subtotal dihitung; jumlah 0/negatif dan data tidak sesuai ditolak |
| Mini Project | Validasi server-side lengkap + ringkasan data |

Screenshot: lihat folder `screenshots/` (latihan1.png, latihan2.png, … mini_project_valid.png, mini_project_error.png).

## Kasus Uji Mini Project
**Valid**
1. Nama `Andi Saputra`, NIM `2024110001`, Prodi `Teknik Informatika`, Semester `3`, Email `andi@mail.com` → ringkasan tampil.
2. Nama `Siti O'Neil`, NIM `20231234`, Prodi `Sistem Informasi`, Semester `14`, Email `siti@kampus.ac.id` → ringkasan tampil, tanda kutip aman.

**Tidak valid**
1. Email `andi@` dan Semester `20` → muncul pesan "Format email tidak valid." dan "Semester harus berupa angka 1–14."
2. NIM `ABC123` dan Nama kosong → muncul pesan "Nama wajib diisi." dan "NIM harus berupa angka dengan panjang 8-12 digit."

## Jawaban Pertanyaan Evaluasi
1. **Client-side vs server-side:** client-side dijalankan di browser pengguna (HTML, CSS, JavaScript); server-side dijalankan di server (PHP) yang memproses permintaan lalu mengirim hasil (HTML) ke browser.
2. **Mengapa lewat web server:** browser tidak bisa mengeksekusi PHP. Web server (Apache) meneruskan file `.php` ke interpreter PHP, dan browser hanya menerima hasil outputnya. Jika dibuka dengan klik ganda, kode tampil mentah / tidak dijalankan.
3. **Tanda `$`:** penanda bahwa nama tersebut adalah variabel (mis. `$nama`).
4. **GET vs POST:** GET mengirim data lewat parameter URL (terlihat, cocok untuk pencarian/permintaan yang tidak mengubah data); POST mengirim data di body request (tidak tampil di URL, lazim untuk form). POST bukan enkripsi, gunakan HTTPS.
5. **Validasi server-side:** validasi di browser (atribut `required`, dll.) bisa dilewati atau dimanipulasi, sehingga server wajib memeriksa ulang agar data aman dan benar.
6. **`htmlspecialchars()`:** mengubah karakter khusus HTML (`< > " ' &`) menjadi entitas sehingga input pengguna tampil sebagai teks, bukan dieksekusi sebagai HTML/script (mencegah XSS).
7. **Manfaat function:** kode dapat dipakai ulang, lebih rapi, mudah dibaca, diuji, dan dipelihara.
