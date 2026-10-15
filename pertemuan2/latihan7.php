<?php
$mahasiswa = ["Andi", "Budi", "Citra", "Dika", "Eka"];

foreach ($mahasiswa as $index =>$nama) {
    $nomor =$index + 1;
    echo "$nomor.$nama<br>";
}
?>