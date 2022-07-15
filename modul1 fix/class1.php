<?php
Class Mobil{
    public $warna = "merah";

    public function getWarna(){
        return $this ->warna;
    }
}

$objekmobil = new Mobil();
echo $objekmobil->getWarna();
?>