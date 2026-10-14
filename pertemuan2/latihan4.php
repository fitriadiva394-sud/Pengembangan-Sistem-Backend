<?php
// Inisialisasi variabel dengan nilai sama tetapi tipe data berbeda
$x = 10;
$y = "10";

// Fungsi bantu untuk menampilkan nilai boolean sebagai string teks "true" atau "false"
function formatBoolean($val) {
    return $val ? 'true' : 'false';
}

// Menampilkan hasil perbandingan sesuai format slide latihan
echo "Tampilkan hasil :<br>";
echo "Nilai sama: " . formatBoolean($x == $y) . "<br>";
echo "Nilai identik: " . formatBoolean($x === $y) . "<br>";
echo "Lebih besar: " . formatBoolean($x > $y) . "<br>";
echo "Lebih kecil: " . formatBoolean($x < $y) . "<br>";
?>