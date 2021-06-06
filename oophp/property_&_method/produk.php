<?php

// diibaratkan dimiliki sebuah toko yang berjualan produk buku dan film

class Produk
{
   // Cara menulis property #1
   // public $judul;
   // public $penulis;
   // public $penerbit;
   // public $harga;

   // Cara menulis property #2
   public $judul = "judul",
      $penulis = "penulis",
      $penerbit = "penerbit",
      $harga = "harga";


   // membuat method
   public function getLabel()
   {
      return "$this->judul, $this->penulis";
   }
}

$produk1 = new Produk();

$produk1->judul = "The Power of Habit";
$produk1->penulis = "Charles Duhigg";
$produk1->penerbit = "New York Times";
$produk1->harga = "90000";

$produk2 = new Produk();

$produk2->judul = "Reply 1988";
$produk2->penulis = "Lee Woo-Jung";
$produk2->penerbit = "CJ E&M";
$produk2->harga = 90000;

echo "Produk Buku: " . $produk1->getLabel();
echo "<br>";
echo "Produk Film: " . $produk2->getLabel();
