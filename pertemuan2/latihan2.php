<?php
// Deklarasi variabel dengan tipe data yang sesuai
$nim         = "230030529";                      // String (karena NIM berupa deretan karakter/angka yang tidak dihitung)
$nama        = "Diva Fitria Ramadani";            // String
$kodeJurusan = "SI";                             // String
$angkatan    = 2023;                             // Integer (angka tahun)
$umur        = 21;                               // Integer (angka umur)
$gender      = "Perempuan";                      // String
$hobi        = ["Membaca", "Menulis", "Rebahan"]; // Array (kumpulan nilai)

// Menampilkan data biodata ke browser
echo "<h2>Biodata Mahasiswa</h2>";
echo "NIM: " . $nim . "<br>";
echo "Nama: " . $nama . "<br>";
echo "Kode Jurusan: " . $kodeJurusan . "<br>";
echo "Angkatan: " . $angkatan . "<br>";
echo "Umur: " . $umur . " tahun<br>";
echo "Gender: " . $gender . "<br>";
echo "Hobi: " . implode(", ", $hobi) . "<br>";
?>