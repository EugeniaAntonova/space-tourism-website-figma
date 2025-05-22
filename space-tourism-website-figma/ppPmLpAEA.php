<?php
// №1
$arr = [2, 5, 9, 3, 1, 4];
$res = 0;
foreach($arr as $item) {
    $res += $item;
}

echo $res;

// №2

$arr = [2, 5, 9, 3, 1, 4];
$res = 0;
foreach($arr as $item) {
    if ($item % 2 == 0) $res += $item;
}
echo $res;

// №3

$arr = [2, 5, 9, 3, 1, 4];
$res = 0;
foreach($arr as $item) {
    $res += $item ** 2;
}
echo $res;

// №4

$arr = [2, 5, 9, 3, 1, 4];
$res = 1;

foreach($arr as $item) {
    $res *= $item;
}

echo $res;