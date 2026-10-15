<?php
// Inisialisasi nilai mahasiswa
$nilai = 85;

// Struktur kontrol percabangan untuk menentukan grade
if ($nilai >= 90) {
    $grade = "A";
} elseif ($nilai >= 80) {
    $grade = "B";
} elseif ($nilai >= 70) {
    $grade = "C";
} elseif ($nilai >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}

// Menampilkan hasil
echo "Nilai: $nilai <br>";
echo "Grade: $grade";
?>