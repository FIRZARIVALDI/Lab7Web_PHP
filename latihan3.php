<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Latihan 3</title></head>
<body>
<h1>Latihan 3 - Perulangan dan Array</h1>
<?php
// 4 nama awal + 3 nama tambahan (minimal tiga nama sesuai modul)
$mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gita"];

echo "<h3>Daftar Mahasiswa</h3><ol>";
foreach ($mahasiswa as $nama) {
    echo "<li>" . htmlspecialchars($nama) . "</li>";
}
echo "</ol>";
?>
</body></html>
