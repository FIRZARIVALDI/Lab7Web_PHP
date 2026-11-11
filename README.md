# Laporan Praktikum 7 - Pemrograman Server-Side dengan PHP

| | |
|---|---|
| **Nama** | (isi nama) |
| **NIM** | (isi NIM) |
| **Kelas** | (isi kelas) |
| **Mata Kuliah** | Pemrograman Web |
| **Topik** | Pemrograman server-side dengan PHP |

---

## 1. Tujuan Praktikum
- Memahami perbedaan pemrosesan client-side dan server-side.
- Mengenali sintaks PHP dan menjalankan file PHP melalui server lokal.
- Menggunakan variabel, tipe data, operator, percabangan, perulangan, dan function.
- Menerima dan memproses data form HTML dengan metode GET dan POST.
- Melakukan validasi dan sanitasi input dasar sebelum data ditampilkan atau diproses.
- Membangun aplikasi sederhana yang menerima, memproses, dan menampilkan data pengguna.

## 2. Perangkat
- Laptop/PC dan web browser
- Visual Studio Code
- PHP dan server lokal XAMPP (Apache)

## 3. Cara Menjalankan Server Lokal
1. Buka **XAMPP Control Panel**, klik **Start** pada **Apache** sampai berwarna hijau.
2. Letakkan folder proyek di `C:\xampp\htdocs\Lab7Web_PHP`.
3. Buka browser dan akses `http://localhost/Lab7Web_PHP/`.
4. Pilih latihan dari halaman menu (`index.php`).

> File PHP tidak boleh dibuka dengan klik ganda karena harus diproses oleh web server.

## 4. Struktur File
```
Lab7Web_PHP/
├── index.php               # halaman menu
├── latihan1.php            # Latihan 1 - Menjalankan PHP
├── latihan2.php            # Latihan 2 - Variabel, operator, percabangan
├── latihan3.php            # Latihan 3 - Perulangan dan array
├── latihan4.php            # Latihan 4 - Function
├── latihan5.php            # Latihan 5 - Form GET
├── latihan6.php            # Latihan 6 - Form POST
├── latihan7.php            # Latihan 7 - Pengolahan data sederhana
├── mini_project.php        # Mini Project - Formulir Data Mahasiswa
├── eksperimen_mandiri.php  # Eksperimen Mandiri 1-5
├── screenshots/            # semua screenshot hasil
└── README.md
```

---

## 5. Hasil dan Pembahasan

### Latihan 1 - Menjalankan PHP
**File:** `latihan1.php` | **URL:** `http://localhost/Lab7Web_PHP/latihan1.php`

📸 **Screenshot:** `screenshots/latihan1.png`

![Latihan 1](screenshots/latihan1.png)

**Penjelasan:**
Halaman menampilkan judul "Belajar PHP", tulisan "PHP berhasil dijalankan", dan waktu server dari fungsi `date()`. Kode PHP tidak tampil sebagai teks di browser, hanya hasil `echo` yang tampil. Ini membuktikan PHP dieksekusi di server dan browser hanya menerima output HTML. Waktu akan berubah setiap halaman di-refresh.

---

### Latihan 2 - Variabel, Operator, dan Percabangan
**File:** `latihan2.php`

📸 **Screenshot 1 (data bawaan):** `screenshots/latihan2_a.png`

![Latihan 2 data bawaan](screenshots/latihan2_a.png)

**Penjelasan:**
Data: Tugas 85, UTS 78, UAS 90. Nilai akhir = (85 × 0,30) + (78 × 0,30) + (90 × 0,40) = **84,90**. Karena nilai ≥ 75 dan < 85, predikatnya **B**.

📸 **Screenshot 2 (nilai diubah):** `screenshots/latihan2_b.png`

![Latihan 2 nilai diubah](screenshots/latihan2_b.png)

**Penjelasan:**
(Isi dengan nilai yang Anda ubah, misalnya Tugas 90, UTS 90, UAS 90 → nilai akhir 90,00 → predikat A. Jelaskan bahwa percabangan `if/elseif/else` memilih predikat sesuai rentang nilai.)

---

### Latihan 3 - Perulangan dan Array
**File:** `latihan3.php`

📸 **Screenshot:** `screenshots/latihan3.png`

![Latihan 3](screenshots/latihan3.png)

**Penjelasan:**
Array `$mahasiswa` berisi 7 nama (4 nama awal dan 3 nama tambahan: Eka, Fajar, Gita). Perulangan `foreach` menampilkan tiap nama sebagai item `<li>` pada daftar bernomor `<ol>`. Setiap nama diamankan dengan `htmlspecialchars()`.

---

### Latihan 4 - Function
**File:** `latihan4.php`

📸 **Screenshot:** `screenshots/latihan4.png`

![Latihan 4](screenshots/latihan4.png)

**Penjelasan:**
- `hitungDiskon(150000, 10)` menghasilkan **Rp135.000** (potongan 10% = Rp15.000).
- `hitungLuasPersegiPanjang(8, 4)` menghasilkan **32**.
- `tentukanKelulusan(72)` menghasilkan **Lulus**, dan `tentukanKelulusan(45)` menghasilkan **Tidak Lulus**.

Function membuat kode bisa dipakai ulang dengan nilai berbeda tanpa menulis ulang rumusnya.

---

### Latihan 5 - Form GET
**File:** `latihan5.php`

📸 **Screenshot 1 (sebelum submit):** `screenshots/latihan5_a.png`

![Latihan 5 sebelum submit](screenshots/latihan5_a.png)

**Penjelasan:**
Tampilan awal form pencarian dengan satu kolom "Kata kunci" dan tombol Cari. URL masih `.../latihan5.php` tanpa parameter.

📸 **Screenshot 2 (setelah submit, tampilkan URL di address bar):** `screenshots/latihan5_b.png`

![Latihan 5 setelah submit](screenshots/latihan5_b.png)

**Penjelasan:**
Setelah mengisi kata kunci (misalnya `php`) dan menekan Cari, URL berubah menjadi `...latihan5.php?kata=php`. Ini ciri metode GET: data dikirim lewat parameter URL sehingga terlihat. Karena itu GET tidak boleh dipakai untuk kata sandi atau data sensitif.

---

### Latihan 6 - Form POST
**File:** `latihan6.php`

📸 **Screenshot 1 (data lengkap):** `screenshots/latihan6_a.png`

![Latihan 6 data lengkap](screenshots/latihan6_a.png)

**Penjelasan:**
Nama dan Program Studi diisi lengkap, lalu muncul "Data diterima" beserta data yang diinput. URL tidak berubah karena metode POST mengirim data lewat body request.

📸 **Screenshot 2 (input berisi tag HTML/tanda kutip, misalnya `<b>Andi</b>` dan `"TI"`):** `screenshots/latihan6_b.png`

![Latihan 6 uji karakter khusus](screenshots/latihan6_b.png)

**Penjelasan:**
Tag HTML tampil apa adanya sebagai teks (tidak menjadi huruf tebal). Ini karena `htmlspecialchars()` mengubah karakter khusus menjadi entitas HTML sehingga aman dari injeksi HTML/script (XSS).

📸 **Screenshot 3 (input kosong / spasi saja):** `screenshots/latihan6_c.png`

![Latihan 6 input kosong](screenshots/latihan6_c.png)

**Penjelasan:**
Jika kolom kosong atau hanya spasi, `trim()` membuatnya menjadi string kosong dan muncul pesan "Semua kolom wajib diisi." Validasi PHP tetap bekerja walaupun atribut `required` di HTML dilewati. (Untuk menguji, hapus atribut `required` sementara lewat Inspect Element, atau isi kolom dengan spasi saja.)

---

### Latihan 7 - Pengolahan Data Sederhana
**File:** `latihan7.php`

📸 **Screenshot 1 (input valid, misalnya Buku, 12500, 3):** `screenshots/latihan7_a.png`

![Latihan 7 valid](screenshots/latihan7_a.png)

**Penjelasan:**
Subtotal = harga × jumlah = 12.500 × 3 = **Rp37.500**. PHP memvalidasi input, mengubah tipe data (`float` dan `int`), lalu menghitung dan memformat dengan `number_format()`.

📸 **Screenshot 2 (harga desimal, misalnya 2500.50 × 2):** `screenshots/latihan7_b.png`

![Latihan 7 desimal](screenshots/latihan7_b.png)

**Penjelasan:**
Harga desimal diterima karena `is_numeric()` bernilai benar. Subtotal 5001 tampil sebagai **Rp5.001**.

📸 **Screenshot 3 (jumlah 0 atau negatif, misalnya 0 atau -2):** `screenshots/latihan7_c.png`

![Latihan 7 tidak valid](screenshots/latihan7_c.png)

**Penjelasan:**
Muncul pesan "Periksa kembali nama barang, harga, dan jumlah." Jumlah 0 atau negatif ditolak oleh pemeriksaan `ctype_digit()` dan `(int)$jumlahInput < 1`. Validasi HTML (`min="1"`) hanya membantu pengguna, sedangkan validasi PHP adalah pemeriksaan utama.

---

## 6. Mini Project - Aplikasi Formulir Data Mahasiswa
**File:** `mini_project.php`

Fitur: form berisi nama, NIM, program studi, semester, dan email; metode POST; validasi server-side (kolom wajib, semester 1-14, email valid, NIM angka 8-12 digit); data ditampilkan dengan `htmlspecialchars()`; bagian pemrosesan dipisah dari tampilan HTML.

📸 **Screenshot 1 (tampilan awal form):** `screenshots/mini_project_form.png`

![Mini project form](screenshots/mini_project_form.png)

**Penjelasan:**
Tampilan awal form dengan lima kolom: Nama, NIM, Program Studi, Semester, dan Email.

📸 **Screenshot 2 (input valid):** `screenshots/mini_project_valid.png`

![Mini project valid](screenshots/mini_project_valid.png)

**Penjelasan:**
Semua data memenuhi aturan validasi, sehingga ringkasan data mahasiswa tampil dalam tabel.

📸 **Screenshot 3 (input tidak valid):** `screenshots/mini_project_error.png`

![Mini project error](screenshots/mini_project_error.png)

**Penjelasan:**
Seluruh pesan kesalahan ditampilkan sekaligus dalam bentuk daftar. Data yang sudah diisi tidak hilang dari form.

### Kasus Uji

**Input valid**

| No | Nama | NIM | Prodi | Semester | Email | Hasil |
|---|---|---|---|---|---|---|
| 1 | Andi Saputra | 2024110001 | Teknik Informatika | 3 | andi@mail.com | Ringkasan tampil |
| 2 | Siti O'Neil | 20231234 | Sistem Informasi | 14 | siti@kampus.ac.id | Ringkasan tampil, tanda kutip aman |

**Input tidak valid**

| No | Input | Hasil |
|---|---|---|
| 1 | Email `andi@` dan Semester `20` | "Format email tidak valid." dan "Semester harus berupa angka 1–14." |
| 2 | Nama kosong dan NIM `ABC123` | "Nama wajib diisi." dan "NIM harus berupa angka dengan panjang 8-12 digit." |

---

## 7. Eksperimen Mandiri
**File:** `eksperimen_mandiri.php`

📸 **Screenshot 1 (seluruh halaman, bagian rata-rata dan format Rupiah):** `screenshots/eksperimen_a.png`

![Eksperimen rata-rata dan Rupiah](screenshots/eksperimen_a.png)

**Penjelasan:**
Eksperimen 1: function `hitungRataRata()` menghitung rata-rata tiga nilai (85, 78, 90 = 84,33). Eksperimen 3: function `formatRupiah()` mengubah angka menjadi format Rupiah, misalnya `1500000` menjadi `Rp1.500.000`.

📸 **Screenshot 2 (hasil pencarian nama, misalnya kata kunci `a`):** `screenshots/eksperimen_b.png`

![Eksperimen pencarian GET](screenshots/eksperimen_b.png)

**Penjelasan:**
Eksperimen 2: pencarian GET pada array nama memakai `stripos()` (tidak membedakan huruf besar/kecil). Nama yang mengandung kata kunci ditampilkan, dan jika tidak ada muncul "Tidak ditemukan."

📸 **Screenshot 3 (validasi NIM di mini project, misalnya NIM `ABC123`):** `screenshots/eksperimen_c.png`

![Eksperimen validasi NIM](screenshots/eksperimen_c.png)

**Penjelasan:**
Eksperimen 4: NIM hanya boleh berisi angka dengan panjang 8-12 digit (ditetapkan sendiri). Selain itu ditolak dengan pesan kesalahan.

**Eksperimen 5 - Tombol Reset:**
Tombol reset (`type="reset"`) hanya mengembalikan isian form ke kondisi awal di browser tanpa mengirim permintaan ke server. Pemrosesan ulang di server (kirim ulang form) membuat request baru sehingga PHP memproses datanya lagi dan mengirim respons baru.

---

## 8. Jawaban Pertanyaan Evaluasi
1. **Perbedaan client-side dan server-side:** client-side dijalankan di browser pengguna (HTML, CSS, JavaScript), sedangkan server-side dijalankan di server (PHP) yang memproses permintaan lalu mengirim hasilnya (HTML) ke browser.
2. **Mengapa file PHP harus lewat web server:** browser tidak dapat mengeksekusi PHP. Web server meneruskan file `.php` ke interpreter PHP, dan browser hanya menerima hasil outputnya. Jika dibuka dengan klik ganda, kode tidak dijalankan.
3. **Fungsi tanda `$`:** penanda bahwa nama tersebut adalah variabel, contohnya `$nama`.
4. **Perbedaan GET dan POST:** GET mengirim data lewat parameter URL (terlihat, cocok untuk pencarian), sedangkan POST mengirim data di body request (tidak tampil di URL, lazim untuk form). POST bukan enkripsi, sehingga tetap perlu HTTPS.
5. **Mengapa validasi di sisi server:** validasi di browser dapat dilewati atau dimanipulasi, sehingga server wajib memeriksa ulang agar data benar dan aman.
6. **Fungsi `htmlspecialchars()`:** mengubah karakter khusus HTML (`< > " ' &`) menjadi entitas sehingga input pengguna tampil sebagai teks dan tidak dieksekusi sebagai HTML/script (mencegah XSS).
7. **Manfaat function:** kode dapat dipakai ulang, lebih rapi, mudah dibaca, diuji, dan dipelihara.

---

## 9. Kesimpulan
(Isi dengan kesimpulan Anda sendiri, misalnya: PHP berjalan di sisi server sehingga browser hanya menerima hasil output; form dapat diproses dengan GET dan POST; validasi dan sanitasi input di sisi server penting untuk keamanan; function membuat kode lebih rapi dan dapat dipakai ulang.)
