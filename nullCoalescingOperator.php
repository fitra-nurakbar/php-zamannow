<?php
$array =["key" => "value"];

$check = $array["key"] ?? "nothing";
echo $check;