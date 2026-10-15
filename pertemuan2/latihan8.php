<?php
// Membuat fungsi hitungLuasLingkaran
function hitungLuasLingkaran($jari) {$luas = 3.14 * $jari * $jari;
    return $luas;
}

// Menjalankan fungsi dengan jari-jari 7
$r = 7;
$hasil = hitungLuasLingkaran($r);

// Menampilkan output
echo "Luas lingkaran dengan jari-jari $r adalah$hasil";
?>