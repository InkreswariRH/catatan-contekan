<?php

class CobaStatic
{
   public static $angka = 1;

   public static function halo()
   {
      return "halo " . self::$angka . " kali.";
   }
}

echo CobaStatic::$angka;
echo "<br>";
echo CobaStatic::halo();
