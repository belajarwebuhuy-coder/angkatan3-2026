<?php
    /* echo "Hello World <br>";
    $nama = "Udin";
    $usia = 25;
    $hidup = true;
    $mati = false;
    $kosong = null;

    echo "Halo, nama saya $nama, Usia saya $usia tahun <br>";

    var_dump($kosong);
    */

    const jabatan = "Manager";
    define("nama", "santai");
    
    //Array 1 Dimensi
    $buah = ["Mangga", "Pisang", "Jambu", "Apel"];
    echo $buah[2]. "<br>";
    //Tambah value pada array
    array_push($buah, "kentang");
    print_r($buah); 
    echo "<br>";
    foreach ($buah as $items) {
        echo $items. "<br>";
    }

    for ($i = 0; $i < count($buah); $i++) {
        echo $buah[$i]. "<br>";
    }


    //Array Asosiative
    $cars = [[
        "brand" => "Toyota",
        "year" => "2010",
        "color" => "Blue"
    ],[
        "brand" => "BYD",
        "year" => "2023",
        "color" => "Silver"
    ],[
        "brand" => "Honda",
        "year" => "2018",
        "color" => "Red"
    ]];

    /* foreach ($cars as $value) {
        echo $value["brand"]. " - " .$value["year"]. " - " .$value["color"]. "<br>";
    }
 */
    $no = 1;

    foreach ($cars as $index => $car) {
        if ($index != 1) {
        echo $no++. ". ";
        echo "Brand : ". $car["brand"]. "<br>";
        echo "Year : ". $car["year"]. "<br>";
        echo "Color : ". $car["color"]. "<br>";
        echo "<hr>";
        }
    }
    
    echo $cars[1]["brand"]. "<br>";
    
    $randomIndex = array_rand($cars);
    
    echo "Brand : " .$cars[$randomIndex]["brand"]. "<br>";
    echo "Year : " .$cars[$randomIndex]["year"]. "<br>";
    echo "Color : " .$cars[$randomIndex]["color"]. "<br>";
        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>

</body>

</html>