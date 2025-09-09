<?php

// class Lingkaran
// {
//     public const PI = 3.14;

//     public function luas($jari_jari)
//     {
//         echo self::PI * $jari_jari * $jari_jari;
//     }
// }

// $lingkaran = new Lingkaran();
// echo $lingkaran::PI . '<br>';
// echo $lingkaran->luas(10);

class Persegipanjang
{
    private $panjang;
    private $lebar;
    public static $luas;
    public static $keliling;

    public function __construct($p, $l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }

    public function luasPersergiPanjang()
    {
        self::$luas = $this->panjang * $this->lebar;
        self::$keliling = (2 * $this->panjang) + (2 * $this->lebar);

        echo 'Luas persegi panjang ' . self::$luas . ' cm </br>';
        echo 'Lebar persegi panjang ' . self::$keliling . ' cm </br>';
    }
}

$persegiPanjang = new Persegipanjang(12, 5);
$persegiPanjang->luasPersergiPanjang();