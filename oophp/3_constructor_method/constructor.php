<?php

class Produk_Constructor
{
  public $judul, $penulis, $penerbit, $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);


// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha"; // property otomatis ditambah
// var_dump($produk2);

$produk1 = new Produk_Constructor("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000);
$produk2 = new Produk_Constructor("Uncharted", "Neil Druckman", "Sony Computer", 250000);
$produk3 = new Produk_Constructor("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Games : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
