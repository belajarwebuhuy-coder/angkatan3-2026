<?php
    class Mobil
    {
        //property
        public $merek;
        public $warna;

        public function jalan () //method
        {
            return "Mobil dengan merek " . $this->merek . " udah di gas <br>";
        }
    }

//instance : create object dari class

$mobil = new mobil();
$mobil->merek = "Xenia";
$mobil->warna = "merah";

$mobil2 = new mobil();
$mobil->merek = "Honda";
$mobil->warna = "Hitam";

echo $mobil->jalan();
echo $mobil2->jalan();