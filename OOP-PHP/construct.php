<!-- Ccontruct : object yang di create di awal -->

<?php

class Mobil 
{
    public $merek;
    public $warna;

    public function __construct($merekParams, $warnaParams)
    {
        $this->merek = $merekParams;
        $this->warna = $warnaParams;
    }

    public function getInfo()
    {
        //interpolation : {}
        return "Mobil dengan merek {$this->merek} berwarna {$this->warna}";
    }
}

$mobil = new Mobil("Avanza", "Kuning");
$mobil2 = new Mobil("Xenia", "Merah");
$mobil3 = new Mobil("Fortuner", "Hitam");

echo $mobil->getInfo();
echo "<br>";
echo $mobil2->getInfo();
echo "<br>";
echo $mobil3->getInfo();