<?php
class Mobil
{
var $warna;
var $merk;
var $harga;

function __construct($merek)
{
$this->warna = "Biru";
$this->merk = $merek;
$this->harga = "10000000";
}
function gantiWarna ($warnaBaru)
{
$this->warna = $warnaBaru;
}

function tampilWarna ()
{
echo "Warna mobilnya : " . $this->warna;
}
}


$a = new Mobil("Nokia");
echo $a->merk;
?>