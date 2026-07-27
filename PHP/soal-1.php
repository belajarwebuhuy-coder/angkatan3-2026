<?php
    echo "Soal No.1 <br>";
    $namaSaya = "Steven Clasius Darba";
    
    echo $namaSaya;
    echo "<hr>";
    
    echo "Soal No.2 <br>";
    $namaDepan = "Steven";
    $namaTengah = "Clasius";
    $namaBelakang = "Darba";
    
    echo $namaDepan." ".$namaTengah." ".$namaBelakang;
    echo "<hr>";
    
    echo "Soal No.4 <br>";
    $angka1 = 20;
    $angka2 = 3;
    
    $hasil = $angka1 * $angka2;
    echo "
    <pre>
    Angka ke-1 = $angka1
    Angka ke-2 = $angka2
    Hasil Perkalian = $hasil
    </pre>
    ";

    echo "<hr>";
    
    
    echo "Soal No.5 <br>";
    $uangAku = 10000;
    $uangKamu = 5000;

    $jumlahUang = $uangAku + $uangKamu;
    echo "
    <pre>
    Uang Aku = $uangAku
    Uang Kamu = $uangKamu
    Uang Kita = $jumlahUang
    </pre>";
?>