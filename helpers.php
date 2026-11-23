<?php
function formatRupiah(float $angka): string {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

function e(string $nilai): string {
    return htmlspecialchars($nilai, ENT_QUOTES, 'UTF-8');
}

function konversiCelciusKeFahrenheit(float $c): float {
    return ($c * 9 / 5) + 32;
}

function tentukanStatusNilai(float $nilai): string {
    if ($nilai >= 85) {
        return 'A (Sangat Baik)';
    } elseif ($nilai >= 75) {
        return 'B (Baik)';
    } elseif ($nilai >= 60) {
        return 'C (Cukup)';
    } else {
        return 'D (Perlu Perbaikan)';
    }
}

function hitungTotal(float $harga, int $jumlah): float {
    return $harga * $jumlah;
}