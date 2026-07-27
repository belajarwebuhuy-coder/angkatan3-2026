<?php 

    $nilai = -22;

    if ($nilai > 100) {
        echo "nilainya kelebihan mas<br>";
    } elseif ($nilai >= 90) {
        echo "A<br>";
    } elseif ($nilai >= 80){
        echo "B<br>";
    } elseif ($nilai >= 70){
        echo "C<br>";
    } elseif ($nilai >= 60){
        echo "D<br>";
    } elseif ($nilai >= 50){
        echo "E<br>";
    } elseif ($nilai < 50 && $nilai >= 0){
        echo "F<br>";
    } elseif ($nilai < 0){
        echo "Kok nilai nya NORMAL<br>";
    }
    echo "<hr>";

    /*  =================================== */

    $warna = "Hitam";
    $hurufKecil = strtolower($warna);

    switch ($hurufKecil) {
        case 'biru' :
            echo "Ini warna Biru!";
            break;
        case 'oren' :
            echo "Ini warna Oren!";
            break;
        case 'hitam' :
            echo "Ini warna Hitam!";
            break;
        case 'silver' :
            echo "Ini warna Silver!";
            break;
        default;
            echo "Tidak Ada Warna Yang Tepat, Ketik Lagi Yang Benar!!!";
            break;
    }
    echo "<hr>";

    // Looping atau perulangan = struktur kode yang digunakan untuk menjalankan blok kode selama kondisi terpenuhi.
    //for, while, do.. while.., foreach
    for ($i=1; $i < 11; $i++) { 
        echo "<br> $i Saya Belajar di PPKD Jakpus";
    }
    echo "<hr>";

    $a = 1;
    while ($a <= 10) {
        echo "$a halo<br>";
        $a++;
    }
    echo "<hr>";
    
    $b = 12;
    do {
        echo "$b cuyyy!<br>";
        $b++;
    } while ($b <= 10);
    echo "<hr>"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        margin: 10px;
        text-align: center;
    }
    </style>
</head>

<body>

</body>

</html>