<?php
// Variable adalah tempat menyimpan data yang bisa gunakan berulag-ulang
// Di php variable bisa berisi berbagai jenis tipe data dan bisa berubah tipe data
// variable pada php bisa kita buat menggunakan $dolar diikuti variablenya
// penamaan variable tidak boleh menggunakan spsasi

// $string = "string";
// $integer = 123;
// $boolean = true;

// var_dump$string;
// var_dump$integer;
// var_dump$boolean;

$laki_laki = ['abdul','ahmad','andi'];
$perempuan = ['ayu','enok','chacha'];
$hobi = ['menggambar','bermain gitar','bermain game'];
$usia = [18, 19, 20, 21, 22];
$enter = "<br>";
$$usia = "Variables";

echo "nama saya " . $perempuan[2] . " usia saya $usia[0] tahun $enter hobi saya adalah $hobi[0],$enter $perempuan[0] adalah teman saya,$enter hobinya adalah $hobi[1].";
echo $enter;
echo $enter;
echo $Array;
echo $enter;
echo $enter;

foreach($usia as $x=>$x_value)
  {
  echo "Key = " . $x . ", Value = " . $x_value;
  echo $enter;
  }

$variable1 = "string";
$variable2 = 123;
$variable3 = true;
$variable4 = ["array"];
