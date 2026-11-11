# Laporan Praktikum 7 - Pemrograman Server-Side dengan PHP

| | |
|---|---|
| **Nama** | (M.FIRZA RIVALDI) |
| **NIM** | (312510082) |
| **Kelas** | (TI 25 1 A) |
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

![Latihan 1]
<img width="332" height="328" alt="image" src="https://github.com/user-attachments/assets/d6d3c428-4437-468d-b3b6-ad277861eb22" />


**Penjelasan:**
Halaman menampilkan judul "Belajar PHP", tulisan "PHP berhasil dijalankan", dan waktu server dari fungsi `date()`. Kode PHP tidak tampil sebagai teks di browser, hanya hasil `echo` yang tampil. Ini membuktikan PHP dieksekusi di server dan browser hanya menerima output HTML. Waktu akan berubah setiap halaman di-refresh.

---

### Latihan 2 - Variabel, Operator, dan Percabangan
**File:** `latihan2.php`

📸 **Screenshot 1 (data bawaan):** `screenshots/latihan2_a.png`

![Latihan 2 data bawaan]
<img width="800" height="315" alt="image" src="https://github.com/user-attachments/assets/16555bf9-3d03-4ac9-923a-c9cacc4d7237" />


**Penjelasan:**
Data: Tugas 85, UTS 78, UAS 90. Nilai akhir = (85 × 0,30) + (78 × 0,30) + (90 × 0,40) = **84,90**. Karena nilai ≥ 75 dan < 85, predikatnya **B**.


### Latihan 3 - Perulangan dan Array
**File:** `latihan3.php`

📸 **Screenshot:** `screenshots/latihan3.png`

![Latihan 3]
<img width="703" height="310" alt="image" src="https://github.com/user-attachments/assets/74d27a9b-a32d-43c8-ba63-cf4c05202566" />


**Penjelasan:**
Array `$mahasiswa` berisi 7 nama (4 nama awal dan 3 nama tambahan: Eka, Fajar, Gita). Perulangan `foreach` menampilkan tiap nama sebagai item `<li>` pada daftar bernomor `<ol>`. Setiap nama diamankan dengan `htmlspecialchars()`.

---

### Latihan 4 - Function
**File:** `latihan4.php`

📸 **Screenshot:** `screenshots/latihan4.png`

![Latihan 4]
<img width="409" height="232" alt="image" src="https://github.com/user-attachments/assets/e2b7f862-ac08-49b0-8130-882de021955d" />


**Penjelasan:**
- `hitungDiskon(150000, 10)` menghasilkan **Rp135.000** (potongan 10% = Rp15.000).
- `hitungLuasPersegiPanjang(8, 4)` menghasilkan **32**.
- `tentukanKelulusan(72)` menghasilkan **Lulus**, dan `tentukanKelulusan(45)` menghasilkan **Tidak Lulus**.

Function membuat kode bisa dipakai ulang dengan nilai berbeda tanpa menulis ulang rumusnya.

---

### Latihan 5 - Form GET
**File:** `latihan5.php`

📸 **Screenshot 1 (sebelum submit):** `screenshots/latihan5_a.png`

![Latihan 5 sebelum submit]<img width="662" height="322" alt="Screenshot 2026-11-11 192954" src="https://github.com/user-attachments/assets/8fd49af4-394b-4763-a281-a436d3c482ed" />


**Penjelasan:**
Tampilan awal form pencarian dengan satu kolom "Kata kunci" dan tombol Cari. URL masih `.../latihan5.php` tanpa parameter.

📸 **Screenshot 2 (setelah submit, tampilkan URL di address bar):** `screenshots/latihan5_b.png`

![Latihan 5 setelah submit]<img width="637" height="355" alt="Screenshot 2026-11-11 193037" src="https://github.com/user-attachments/assets/b5567ae1-fddf-468b-9edd-0ba00eb39fe1" />


**Penjelasan:**
Setelah mengisi kata kunci (misalnya `php`) dan menekan Cari, URL berubah menjadi `...latihan5.php?kata=php`. Ini ciri metode GET: data dikirim lewat parameter URL sehingga terlihat. Karena itu GET tidak boleh dipakai untuk kata sandi atau data sensitif.

---

### Latihan 6 - Form POST
**File:** `latihan6.php`

📸 **Screenshot 1 (data lengkap):** `screenshots/latihan6_a.png`

![Latihan 6 data lengkap]<img width="488" height="322" alt="Screenshot 2026-11-11 193329" src="https://github.com/user-attachments/assets/b4c7ec1c-dd38-4cfd-892f-26aee453bd85" />


**Penjelasan:**
Nama dan Program Studi diisi lengkap, lalu muncul "Data diterima" beserta data yang diinput. URL tidak berubah karena metode POST mengirim data lewat body request.

📸 **Screenshot 2 (input berisi tag HTML/tanda kutip, misalnya `<b>Andi</b>` dan `"TI"`):** `screenshots/latihan6_b.png`

![Latihan 6 uji karakter khusus]<img width="481" height="321" alt="Screenshot 2026-11-11 193300" src="https://github.com/user-attachments/assets/4e46479d-9dc6-4057-bddc-061ca26d5286" />


**Penjelasan:**
Tag HTML tampil apa adanya sebagai teks (tidak menjadi huruf tebal). Ini karena `htmlspecialchars()` mengubah karakter khusus menjadi entitas HTML sehingga aman dari injeksi HTML/script (XSS).

📸 **Screenshot 3 (input kosong / spasi saja):** `screenshots/latihan6_c.png`

![Latihan 6 input kosong]<img width="425" height="224" alt="Screenshot 2026-11-11 193417" src="https://github.com/user-attachments/assets/d3a07c94-151a-4a8b-a81c-a3db126dd674" />


**Penjelasan:**
Jika kolom kosong atau hanya spasi, `trim()` membuatnya menjadi string kosong dan muncul pesan "Semua kolom wajib diisi." Validasi PHP tetap bekerja walaupun atribut `required` di HTML dilewati. (Untuk menguji, hapus atribut `required` sementara lewat Inspect Element, atau isi kolom dengan spasi saja.)

---

### Latihan 7 - Pengolahan Data Sederhana
**File:** `latihan7.php`

📸 **Screenshot 1 (input valid, misalnya Buku, 12500, 3):** `screenshots/latihan7_a.png`

![Latihan 7 valid]<img width="763" height="337" alt="image" src="https://github.com/user-attachments/assets/95476cb2-91bb-4856-b463-301af59e80ba" />


**Penjelasan:**
Subtotal = harga × jumlah = 12.500 × 3 = **Rp37.500**. PHP memvalidasi input, mengubah tipe data (`float` dan `int`), lalu menghitung dan memformat dengan `number_format()`.

📸 **Screenshot 2 (harga desimal, misalnya 2500.50 × 2):** `screenshots/latihan7_b.png`

![Latihan 7 desimal]<img width="820" height="338" alt="image" src="https://github.com/user-attachments/assets/9c234285-c1bb-4b91-b3e4-bb3ac50ba29b" />


**Penjelasan:**
Harga desimal diterima karena `is_numeric()` bernilai benar. Subtotal 5001 tampil sebagai **Rp5.001**.

📸 **Screenshot 3 (jumlah 0 atau negatif, misalnya 0 atau -2):** `screenshots/latihan7_c.png`

![Latihan 7 tidak valid]
<img width="714" height="237" alt="image" src="https://github.com/user-attachments/assets/30695606-b210-4700-b81e-ff6c8fbee27c" />


**Penjelasan:**
Muncul pesan "Periksa kembali nama barang, harga, dan jumlah." Jumlah 0 atau negatif ditolak oleh pemeriksaan `ctype_digit()` dan `(int)$jumlahInput < 1`. Validasi HTML (`min="1"`) hanya membantu pengguna, sedangkan validasi PHP adalah pemeriksaan utama.

---

## 6. Mini Project - Aplikasi Formulir Data Mahasiswa
**File:** `mini_project.php`

Fitur: form berisi nama, NIM, program studi, semester, dan email; metode POST; validasi server-side (kolom wajib, semester 1-14, email valid, NIM angka 8-12 digit); data ditampilkan dengan `htmlspecialchars()`; bagian pemrosesan dipisah dari tampilan HTML.

📸 **Screenshot 1 (tampilan awal form):** `screenshots/mini_project_form.png`

![Mini project form]<img width="512" height="496" alt="image" src="https://github.com/user-attachments/assets/2144ad96-4b7b-4766-8823-302ad8eb66db" />



**Penjelasan:**
Tampilan awal form dengan lima kolom: Nama, NIM, Program Studi, Semester, dan Email.

📸 **Screenshot 2 (input valid):** `screenshots/mini_project_valid.png`

![Mini project valid]<img width="492" height="474" alt="Screenshot 2026-11-11 194415" src="https://github.com/user-attachments/assets/72ac4192-5180-4a67-9c80-913a8e2e7b6e" />
<img width="491" height="767" alt="Screenshot 2026-11-11 194434" src="https://github.com/user-attachments/assets/800e59ae-7776-43f3-9373-f66d60fd4e72" />


**Penjelasan:**
Semua data memenuhi aturan validasi, sehingga ringkasan data mahasiswa tampil dalam tabel.

📸 **Screenshot 3 (input tidak valid):** `screenshots/mini_project_error.png`

![Mini project error]<img width="506" height="470" alt="image" src="https://github.com/user-attachments/assets/1959fee0-2db6-4f5a-b76b-903ee9f4fb75" />


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

![Eksperimen rata-rata dan Rupiah]<img width="1206" height="741" alt="image" src="https://github.com/user-attachments/assets/f1ad094f-657b-43c9-b547-33f626ad665b" />


**Penjelasan:**
Eksperimen 1: function `hitungRataRata()` menghitung rata-rata tiga nilai (85, 78, 90 = 84,33). Eksperimen 3: function `formatRupiah()` mengubah angka menjadi format Rupiah, misalnya `1500000` menjadi `Rp1.500.000`.

📸 **Screenshot 2 (hasil pencarian nama, misalnya kata kunci `a`):** `screenshots/eksperimen_b.png`

![Eksperimen pencarian GET]<img width="423" height="256" alt="image" src="https://github.com/user-attachments/assets/b668a838-54cb-4dc0-9ee0-007d934bfefe" />
<img width="399" height="151" alt="image" src="https://github.com/user-attachments/assets/533a35f2-4001-48ba-93f9-2276767dbd0f" />


**Penjelasan:**
Eksperimen 2: pencarian GET pada array nama memakai `stripos()` (tidak membedakan huruf besar/kecil). Nama yang mengandung kata kunci ditampilkan, dan jika tidak ada muncul "Tidak ditemukan."

📸 **Screenshot 3 (validasi NIM di mini project, misalnya NIM `ABC123`):** `screenshots/eksperimen_c.png`

![Eksperimen validasi NIM]<img width="249" height="78" alt="image" src="https://github.com/user-attachments/assets/91d99da5-ca0f-4a7a-a4b6-cc8747bc132b" />


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
