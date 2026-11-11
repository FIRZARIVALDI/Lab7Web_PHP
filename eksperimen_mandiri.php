<?php
// Eksperimen 1: rata-rata tiga komponen nilai
function hitungRataRata($a, $b, $c) {
    return ($a + $b + $c) / 3;
}

// Eksperimen 3: format Rupiah
function formatRupiah($angka) {
    return "Rp" . number_format($angka, 0, ",", ".");
}

// Eksperimen 2: data sederhana untuk pencarian GET
$daftarNama = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gita"];
$kata = trim($_GET["kata"] ?? "");
$hasilCari = [];
if ($kata !== "") {
    foreach ($daftarNama as $n) {
        if (stripos($n, $kata) !== false) {
            $hasilCari[] = $n;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Eksperimen Mandiri</title></head>
<body>
<h1>Eksperimen Mandiri</h1>

<h2>1. Rata-rata Nilai</h2>
<?php
$tugas = 85; $uts = 78; $uas = 90;
echo "Tugas $tugas, UTS $uts, UAS $uas → rata-rata: " . number_format(hitungRataRata($tugas, $uts, $uas), 2);
?>

<h2>2. Pencarian Nama (GET)</h2>
<form method="GET" action="">
  <label for="kata">Cari nama:</label>
  <input id="kata" name="kata" type="text" value="<?= htmlspecialchars($kata, ENT_QUOTES, "UTF-8") ?>">
  <button type="submit">Cari</button>
</form>
<?php
if ($kata !== "") {
    if ($hasilCari) {
        echo "<ul>";
        foreach ($hasilCari as $n) echo "<li>" . htmlspecialchars($n) . "</li>";
        echo "</ul>";
    } else {
        echo "<p>Tidak ditemukan.</p>";
    }
}
?>

<h2>3. Format Rupiah</h2>
<?php
echo formatRupiah(1500000) . " | " . formatRupiah(25000) . " | " . formatRupiah(999);
?>

<h2>4. Validasi NIM</h2>
<p>Sudah diterapkan di <a href="mini_project.php">mini_project.php</a> (angka saja, 8–12 digit).</p>

<h2>5. Tombol Reset</h2>
<form method="POST" action="">
  <input name="contoh" type="text" value="<?= htmlspecialchars($_POST["contoh"] ?? "", ENT_QUOTES, "UTF-8") ?>">
  <button type="submit">Kirim</button>
  <button type="reset">Reset</button>
</form>
<p><small>Reset hanya mengembalikan isian form ke nilai awal di browser (tanpa request ke server).
Kirim ulang membuat request baru ke server dan PHP memproses datanya lagi.</small></p>
</body></html>
