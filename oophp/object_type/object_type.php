<?php

class Produk
{

   public $judul,
      $penulis,
      $penerbit,
      $harga;

   public function __construct($judul, $penulis, $penerbit, $harga)
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

class CetakInfo
{

   public function cetak(Produk $produk)
   {
      $str = "Buku {$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
      return $str;
   }
}

$produk1 = new Produk("The Habit", "Charles Dunhigg", "New York Times", 90000);
$infoProduk = new CetakInfo();
echo $produk1->getLabel();
echo "<br>";
echo $infoProduk->cetak($produk1);
