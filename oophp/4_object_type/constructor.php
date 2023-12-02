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

class CetakInfoProduk
{
  public function cetak(Produk_Constructor $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Produk_Constructor("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000);
$produk2 = new Produk_Constructor("Uncharted", "Neil Druckman", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Games : " . $produk2->getLabel();
echo "<br>";

$cetakprdk = new CetakInfoProduk();
echo $cetakprdk->cetak($produk1);
