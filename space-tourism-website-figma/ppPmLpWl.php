<?php
// №1

$i = 1;
$divider = ', ';

while ($i <= 100) {
    if ($i == 100) $divider = '';
    echo $i . $divider;
    $i++;
}

// №2

$i = 11;
$divider = ', ';

while ($i <= 33) {
    if ($i == 33) $divider = '';
    echo $i . $divider;
    $i++;
}

// №3

$i = 100;
$divider = ', ';

while ($i >= 1) {
    if ($i == 1) $divider = '';
    echo $i . $divider;
    $i--;
}

// №4

$i = 0;
$num = 2;

while ($num <= 100) {
    $num *= 3;
    $i++;
}

echo "num: {$num}, iterations: {$i}";