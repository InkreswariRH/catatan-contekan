<?php

class Produk
{
   public $judul,
      $penulis,
      $penerbit,
      $harga;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
   {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
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
   public $jmlHalaman;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
   {
      parent::__construct($judul, $penulis, $penerbit, $harga);

      $this->jmlHalaman = $jmlHalaman;
   }

   public function getInfoProduk()
   {
      $str = "Buku: " . parent::getInfoProduk() . "- $this->jmlHalaman Halaman.";
      return $str;
   }
}

class Film extends Produk
{
   public $durasiFilm;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $durasiFilm = 0)
   {
      parent::__construct($judul, $penulis, $penerbit, $harga);

      $this->durasiFilm = $durasiFilm;
   }

   public function getInfoProduk()
   {
      $str = "Film: " . parent::getInfoProduk() . " ~ $this->durasiFilm jam.";
      return $str;
   }
}

$produk1 = new Buku("The Power of Habit", "Charles Dunhigg", "New York Times", 90000, 370);
$produk2 = new Film("Reply 1988", "Lee Woo-Jung", "CJ E&M", 50000, 60);

echo $produk1->getLabel();
echo "<br>";
echo $produk1->getInfoProduk();
echo "<br>";
echo "<br>";
echo $produk2->getLabel();
echo "<br>";
echo $produk2->getInfoProduk();
