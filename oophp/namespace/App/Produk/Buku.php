<?php

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
