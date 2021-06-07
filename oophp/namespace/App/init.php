<?php
// require 'Produk/InfoProduk.php';
// require 'Produk/Produk.php';
// require 'Produk/Buku.php';
// require 'Produk/Film.php';
// require 'Produk/CetakInfoProduk.php';

// spl_autoload_register(function ($class) {
//    require 'Produk/' . $class . '.php';
// });

spl_autoload_register(function ($class) {
   $class = explode('\\', $class);
   $class = end($class);
   require __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function ($class) {
   $class = explode('\\', $class);
   $class = end($class);
   require __DIR__ . '/Service/' . $class . '.php';
});
