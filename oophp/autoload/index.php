<?php

require 'App/init.php';

$produk1 = new Buku("The Power of Habit", "Charles Dunhigg", "New York Times", 90000, 370);
$produk2 = new Film("Reply 1988", "Lee Woo-Jung", "CJ E&M", 50000, 60);

$cetakProduk = new CetakInfoProduk();

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
