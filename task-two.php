<?php
$today = getdate(); // Mendapatkan informasi tanggal dan waktu saat ini

$day = $today['mday']; // Mendapatkan tanggal (hari)
$month = $today['mon']; // Mendapatkan bulan
$year = $today['year']; // Mendapatkan tahun

// Membuat format tanggal dalam bentuk 'dd-mm-yyyy'
$dateFormatted = sprintf("%02d-%02d-%04d", $day, $month, $year);

echo "Tanggal, bulan, dan tahun sekarang adalah: $dateFormatted";
?>
