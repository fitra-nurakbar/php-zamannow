// tipe data number
// int = bilangan bulat

 
echo "hasil dari integer: ";
// oktal 0-7 basis 8 :
var_dump (001234567);
// hexadecimal 0-f basis 16 :
var_dump (0x0123456789abcdef);
// binary 0 dan 1 basis 2 :
var_dump (0b010101);
// underscore pada int 
var_dump (1_200_000);

// floating point
// float = bilangan pecahan
<?php
// ditandai dengan (.) :
var_dump (0.123);
// floating E notation plus e1++ (e1 = nilai x 10)
var_dump(1e3);
// floating E notation min e1-- (e-1 = nilai x 0.1)
var_dump (1e-3);
// underscore pada float
var_dump (0.000_1);

// overflow integer :
// jika melebihi batas maximum maka akan berubah menjadi floating point 
// 32 bit sekitar 2147483647
var_dump(2147483648);
// 64 bit sekitar 9223372036854775807
var_dump(9223372036854775808); 
