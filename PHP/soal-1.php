<?php
    echo "Soal No.1 <br>";
    $namaSaya = "Ariel Cuiras Clasius";
    
    echo $namaSaya;
    echo "<hr>";
    
    echo "Soal No.2 <br>";
    $namaDepan = "Ariel";
    $namaTengah = "Cuiras";
    $namaBelakang = "Clasius";
    
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
    </pre>
    ";
    
    echo "Soal No.7 <br>";
    $nilaiAwal = 75;
    $nilaiPerbaikan = 80;
    
    $simpanNilai = $nilaiAwal;
    $nilaiAwal = $nilaiPerbaikan;
    $nilaiPerbaikan = $simpanNilai;
    
    echo "<br> Nilai Awal = $nilaiAwal";
    echo "<hr>";
    


?>