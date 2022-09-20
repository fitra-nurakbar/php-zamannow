<?php
// $arr = [[11,2,4],[4,5,6],[10,8,-12]];

// function diagonalDifference($arr) {
//     $first = 0; $second = 0; $count = count($arr);
//     for ($i = 0, $j = ($count - 1); $i < $count; $i++, $j--){
//         $first += $arr[$i][$i];
//         $second += $arr[$j][$j];
//     }
//     return abs($first - $second);
// }

// for($a = 1; $a <= 100; $a++){
//     if($a % 2 == 0){
//               continue;
//     }
//     echo "line : $a" . PHP_EOL;
// }

// function thisIsFunction(string $nama, callable $text){
//     $word = $text($nama);
//     echo "Nama saya $word". PHP_EOL;
// }  

// $finaleName = function(string $name): string {
//     return strtoupper($name);
// };

// thisIsFunction ("abdul", $finaleName);
// thisIsFunction("dodi", "strtoupper");

// $first = "Abdul";
// $last = "Chan";

// $anonymous = function() use ($first, $last): string {
//     return strtoupper("Hello $first $last". PHP_EOL);
// };

// $arrow = fn() => strtolower("Hello $first $last". PHP_EOL);

// echo $anonymous();
// echo $arrow();

// function recursive(int $value): int
// {
//     if($value == 1){
//         return 1;
//     }else{ 
//         return $value * recursive($value - 1);
//     }
// }

// var_dump(recursive(10));
// echo recursive(10).PHP_EOL;

var_dump(substr("abc def ghi", 0, 7));