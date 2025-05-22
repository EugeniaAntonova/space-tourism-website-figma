<?php
// №1
$res = 0;
for ($i = 2; $i <=100; $i++) {
    $res += $i;
}

echo $res;

// №2

$res = 0;
for ($i = 1; $i <= 99; $i += 2) {
    $res += $i;
}

echo $i;

// №3

$res = 1;
for ($i = 1; $i <= 20; $i++) {
    $res *= $i;
}

echo $res;