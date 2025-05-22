<?php
// №1
$month = 3;

if ($month > 0 and $month <= 12) {
    if ($month >= 3 and $month <= 5) {
        echo 'spring';
    } elseif ($month >= 6 and $month <= 8) {
        echo 'summer';
    } elseif ($month >= 9 and $month <= 11) {
        echo 'autumn';
    } else {
        echo 'winter';
    }
} else {
    echo 'not a month';
}

// №2

$str = 'abcde';

if ($str[0] == 'a') {
    echo 'the first letter is "a"';   
} else {
    echo 'the first letter is NOT "a"';
}

// №3

$num = 12345;
$str = (string) $num;
if (in_array($str, [1, 2, 3])) {
    echo "the first symbol is in the range 1 - 3";
}


// №4

$num = 123;
$str = (string) $num;
if (strlen($str) === 3) {
    $res = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $res += $str[$i];
    }
    echo $res;
}

// №5

$num = 123321;
$str = (string) $num;
if (strlen($str) === 6) {
    $x = 0;
    $y = 0;
    for ($i = 0; $i < strlen($str) / 2; $i++) {
        $x += $str[$i];
    }
    for ($i = strlen($str) / 2; $i < strlen($str); $i++) {
        $y += $str[$i];
    }

    $res = $x == $y ? 'lucky ticket!' : 'better luck next time';
    echo $res;
}
