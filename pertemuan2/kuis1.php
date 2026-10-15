<?php
// Membuat array berisi angka 1 sampai 20
$angka = range(1, 20);

// Perulangan dan percabangan
foreach ($angka as $nilai) {
    if ($nilai % 3 == 0) {
        echo "$nilai<br>";
    }
}
?>