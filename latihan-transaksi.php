<?php
require_once __DIR__ . '/helpers.php';

$hargaSatuan = 45000;
$jumlahBarang = 3;
$totalBelanja = hitungTotal($hargaSatuan, $jumlahBarang);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Latihan Function - Total Belanja</title>
</head>
<body>
<h2>Hasil Latihan Function (Total Belanja)</h2>
<p>Harga Satuan: <?php echo e(formatRupiah($hargaSatuan)); ?></p>
<p>Jumlah: <?php echo e((string) $jumlahBarang); ?></p>
<p>Total Belanja: <?php echo e(formatRupiah($totalBelanja)); ?></p>
</body>
</html>