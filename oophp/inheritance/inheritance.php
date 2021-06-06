<?php

class Produk
{
   public $judul,
      $penulis,
      $penerbit,
      $harga,
      $jmlHalaman,
      $durasiFilm;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman, $durasiFilm)
   {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->durasiFilm = $durasiFilm;
   }

   public function getLabel()
   {
      return "Penulis: $this->penulis, Penerbit: $this->penerbit";
   }

   public function getInfoProduk()
   {
      $str = "$this->judul | $this->penulis, $this->penerbit ($this->harga)";
      return $str;
   }
}

class Buku extends Produk
{
   public function getInfoProduk()
   {
      $str = "Buku: $this->judul | $this->penulis, $this->penerbit ($this->harga) - $this->jmlHalaman Halaman.";
      return $str;
   }
}

class Film extends Produk
{
   public function getInfoProduk()
   {
      $str = "Film: $this->judul | $this->penulis, $this->penerbit ($this->harga) ~ $this->durasiFilm jam.";
      return $str;
   }
}

$produk1 = new Buku("The Power of Habit", "Charles Dunhigg", "New York Times", 90000, 370, 0);
$produk2 = new Film("Reply 1988", "Lee Woo-Jung", "CJ E&M", 50000, 0, 60);

echo $produk1->getLabel();
echo "<br>";
echo $produk1->getInfoProduk();
echo "<br>";
echo "<br>";
echo $produk2->getLabel();
echo "<br>";
echo $produk2->getInfoProduk();
