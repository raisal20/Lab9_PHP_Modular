<?php
require_once __DIR__ . '/helpers.php';

$suhuC = 30;
$suhuF = konversiCelciusKeFahrenheit($suhuC);
$nilaiUjian = 82;
$predikat = tentukanStatusNilai($nilaiUjian);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Latihan Function - Suhu & Nilai</title>
</head>
<body>
<h2>Hasil Latihan Function (Konversi & Predikat)</h2>
<p>Suhu <?php echo e((string) $suhuC); ?>°C = <?php echo e((string) $suhuF); ?>°F</p>
<p>Nilai <?php echo e((string) $nilaiUjian); ?> = <?php echo e($predikat); ?></p>
</body>
</html>