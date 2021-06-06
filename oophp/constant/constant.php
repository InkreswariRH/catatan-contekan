<?php
// // membuat konstanta menggunakan method define()
// define("NAMA", "Ines");
// echo NAMA;

// echo "<hr>";

// // membuat konstanta menggunakan keyword const
// const UMUR = 26;
// echo UMUR;


class Coba
{
   const NAMA = "Ines";
}
// cara memanggil konstanta yang dideklarasikan di dalam class
echo Coba::NAMA;
