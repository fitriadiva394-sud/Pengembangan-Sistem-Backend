<?php
function hitungNilaiAkhir($tugas, $uts,$uas) {
    // Menghitung nilai akhir berdasarkan bobot
    $nilaiAkhir = ($tugas * 0.3) + ($uts * 0.3) + ($uas * 0.4);

    // Menentukan status kelulusan
    if ($nilaiAkhir >= 70) {$status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    // Menampilkan output
    echo "Nilai Akhir: " . $nilaiAkhir . "<br>";
    echo "Status: " . $status;
}

// Contoh pemanggilan (menghasilkan nilai akhir 83 seperti di contoh)
// (80 * 0.3) + (80 * 0.3) + (87.5 * 0.4) = 24 + 24 + 35 = 83
hitungNilaiAkhir(80, 80, 87.5);
?>