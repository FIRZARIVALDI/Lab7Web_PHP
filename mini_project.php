<?php
// ===== BAGIAN PEMROSESAN DATA (dipisah dari tampilan) =====
$data = null;
$error = [];
$nama = $nim = $prodi = $email = $semesterInput = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    if ($nama === "") $error[] = "Nama wajib diisi.";
    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim) || strlen($nim) < 8 || strlen($nim) > 12) {
        // Eksperimen 4: NIM hanya angka, panjang 8-12 digit
        $error[] = "NIM harus berupa angka dengan panjang 8-12 digit.";
    }
    if ($prodi === "") $error[] = "Program studi wajib diisi.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }
    if (!ctype_digit((string)$semesterInput) ||
        (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1–14.";
    }

    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}

function e($teks) {
    return htmlspecialchars((string)$teks, ENT_QUOTES, "UTF-8");
}
?>
<!-- ===== BAGIAN TAMPILAN ===== -->
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Mini Project - Data Mahasiswa</title></head>
<body>
<h1>Formulir Data Mahasiswa</h1>

<?php if ($error): ?>
  <div style="color:red">
    <p>Terdapat kesalahan:</p>
    <ul>
      <?php foreach ($error as $pesan): ?>
        <li><?= e($pesan) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>

<?php if ($data): ?>
  <h3>Ringkasan Data Mahasiswa</h3>
  <table border="1" cellpadding="6">
    <tr><th>Nama</th><td><?= e($data["nama"]) ?></td></tr>
    <tr><th>NIM</th><td><?= e($data["nim"]) ?></td></tr>
    <tr><th>Program Studi</th><td><?= e($data["prodi"]) ?></td></tr>
    <tr><th>Semester</th><td><?= e($data["semester"]) ?></td></tr>
    <tr><th>Email</th><td><?= e($data["email"]) ?></td></tr>
  </table>
<?php endif; ?>

<form method="POST" action="">
  <p><label for="nama">Nama</label><br>
     <input id="nama" name="nama" type="text" value="<?= e($nama) ?>" required></p>
  <p><label for="nim">NIM</label><br>
     <input id="nim" name="nim" type="text" value="<?= e($nim) ?>" required></p>
  <p><label for="prodi">Program Studi</label><br>
     <input id="prodi" name="prodi" type="text" value="<?= e($prodi) ?>" required></p>
  <p><label for="semester">Semester (1-14)</label><br>
     <input id="semester" name="semester" type="number" min="1" max="14" value="<?= e($semesterInput) ?>" required></p>
  <p><label for="email">Email</label><br>
     <input id="email" name="email" type="text" value="<?= e($email) ?>" required></p>
  <button type="submit">Kirim</button>
</form>
</body>
</html>
