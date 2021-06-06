<?php

class Produk
{

   public $judul,
      $penulis,
      $penerbit,
      $harga;

   // konstruktor tanpa nilai default
   //    public function __construct($judul, $penulis, $penerbit, $harga)
   // {
   //    $this->judul = $judul;
   //    $this->penulis = $penulis;
   //    $this->penerbit = $penerbit;
   //    $this->harga = $harga;
   // }


   // konstruktor dengan nilai default
   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
   {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
   }

   public function getLabel()
   {
      return "$this->judul, $this->penulis, $this->harga";
   }
}

$produk1 = new Produk("The Habit", "Charles Duhigg", "New York Times", 90000);
$produk2 = new Produk("Harry Potter");
echo $produk1->getLabel();
echo "<br>";
echo $produk2->getLabel();
