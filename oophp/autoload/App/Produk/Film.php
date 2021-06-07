<?php

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
