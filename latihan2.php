<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Latihan 2</title></head>
<body>
<h1>Latihan 2 - Variabel, Operator, Percabangan</h1>
<?php
$nama = "Siti";
$tugas = 85;
$uts = 78;
$uas = 90;

$nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

if ($nilaiAkhir >= 85) {
    $predikat = "A";
} elseif ($nilaiAkhir >= 75) {
    $predikat = "B";
} elseif ($nilaiAkhir >= 60) {
    $predikat = "C";
} else {
    $predikat = "D";
}

echo "Nama: " . htmlspecialchars($nama) . "<br>";
echo "Nilai akhir: " . number_format($nilaiAkhir, 2) . "<br>";
echo "Predikat: " . $predikat;
?>
<!-- Uji kombinasi lain: ubah $tugas, $uts, $uas di atas lalu refresh browser -->
</body></html>
