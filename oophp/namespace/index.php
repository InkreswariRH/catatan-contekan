<?php

require 'App/init.php';

// $produk1 = new Buku("The Power of Habit", "Charles Dunhigg", "New York Times", 90000, 370);
// $produk2 = new Film("Reply 1988", "Lee Woo-Jung", "CJ E&M", 50000, 60);

// $cetakProduk = new CetakInfoProduk();

// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();




// cara manggilnya, karena sudah pake namespace, maka harus ada namespace nya juga pas instansiasi.
// Jadi namespace + nama class
// misalkan mau panggil class user yang ada di package Produk:

// new App\Service\User();
// echo "<br>";
// new App\Produk\User();



// membuat alias agar saat dipanggil tidak kepanjangan ngetiknya
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

// setelah dibikin alias, cara manggilnya jadi begini:
new ServiceUser();
echo "<br>";
new ProdukUser();
