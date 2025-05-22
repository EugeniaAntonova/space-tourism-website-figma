<?php
// №1

$str = '';
for ($i = 0; $i < 10; $i++) {
    $str .= '-';
}
echo $str;

// №2

$str = '';
for ($i = 1; $i < 10; $i++) {
    $str .= $i;
}

echo $str;

// №3

$str = '';
for ($i = 9; $i > 0; $i--) {
    $str .= $i;
}

echo $str;

// №4

$str = '';
$max = 9;
for ($i = 1; $i <= $max; $i++) {
    $add = "-{$i}";
    if ($i == $max) {
        $add = "-{$i}-";
    }

    $str .= $add;
}

echo $str;
