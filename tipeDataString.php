<?php
/* // tipe data string
// Single quote :
echo'single quote';
echo"\n";
// Double quote kelebihannya adalah kita bisa menggunakan escape sequence :
echo"contohnya adalah \nuntuk enter";
echo"\n";
echo"contohnya adalah \tuntuk tab";
echo"\n"; */ 

// Heredoc fitur untuk membuat string  yang panjang tanpa harus melakukan enter manual 
// jalankan pada terminal
echo <<<CONTOH
ini adalah contoh heredoc
contohnya ini enter tanpa harus menggunakan
escape sequence
kita tinggal melakukan enter 
pada baris maka otomatis enter
bisa "quote" juga loh
CONTOH;

// Nowdoc mirip seperti heredoc tapi tidak memiliki kemampuam parsing seperti Heredoc atau Double Quote.
echo <<<'CONTOH'
ini adalah contoh Nowedoc
contohnya ini enter tanpa harus menggunakan
escape sequence
kita tinggal melakukan enter 
pada baris maka otomatis enter
bisa "quote" juga loh
CONTOH;
