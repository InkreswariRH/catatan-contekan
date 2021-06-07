<?php

interface InfoProduk
{
   public function getInfoProduk();
}

abstract class Produk
{
   protected $judul,
      $penulis,
      $penerbit,
      $diskon = 0,
      $harga;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
   {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
   }

   // setter dan getter
   public function setJudul($judul)
   {
      $this->judul = $judul;
   }

   public function getJudul()
   {
      return $this->judul;
   }

   public function setPenulis($penulis)
   {
      $this->penulis = $penulis;
   }

   public function getPenulis()
   {
      return $this->penulis;
   }

   public function setPenerbit($penerbit)
   {
      $this->penerbit = $penerbit;
   }

   public function getPenerbit()
   {
      return $this->penerbit;
   }

   public function setDiskon($diskon)
   {
      $this->diskon = $diskon;
   }

   public function getHarga()
   {
      return $this->harga - ($this->harga * $this->diskon / 100);
   }

   public function getLabel()
   {
      return "Penulis: $this->penulis, Penerbit: $this->penerbit";
   }

   abstract public function getInfo();
}

class Buku extends Produk implements InfoProduk
{
   public $jmlHalaman;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
   {
      parent::__construct($judul, $penulis, $penerbit, $harga);

      $this->jmlHalaman = $jmlHalaman;
   }

   public function getInfo()
   {
      $str = "$this->judul | $this->penulis, $this->penerbit ($this->harga)";
      return $str;
   }

   public function getInfoProduk()
   {
      $str = "Buku: " . $this->getInfo() . "- $this->jmlHalaman Halaman.";
      return $str;
   }
}

class Film extends Produk implements InfoProduk
{
   public $durasiFilm;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $durasiFilm = 0)
   {
      parent::__construct($judul, $penulis, $penerbit, $harga);

      $this->durasiFilm = $durasiFilm;
   }

   public function getInfo()
   {
      $str = "$this->judul | $this->penulis, $this->penerbit ($this->harga)";
      return $str;
   }

   public function getInfoProduk()
   {
      $str = "Film: " . $this->getInfo() . " ~ $this->durasiFilm jam.";
      return $str;
   }
}

class CetakInfoProduk
{
   public $daftarProduk = [];

   public function tambahProduk(Produk $produk)
   {
      $this->daftarProduk[] = $produk;
   }

   public function cetak()
   {
      $str = "DAFTAR PRODUK: <br>";
      foreach ($this->daftarProduk as $p) {
         $str .= "- {$p->getInfoProduk()} <br>";
      }
      return $str;
   }
}

$produk1 = new Buku("The Power of Habit", "Charles Dunhigg", "New York Times", 90000, 370);
$produk2 = new Film("Reply 1988", "Lee Woo-Jung", "CJ E&M", 50000, 60);

$cetakProduk = new CetakInfoProduk();

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
