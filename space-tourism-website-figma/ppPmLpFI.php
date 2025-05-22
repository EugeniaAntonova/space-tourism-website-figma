<?php
// №1
$arr = [1, 2, 3, 4, 5];
$res = '';
foreach ($arr as $item) {
    $divider = (strlen($res) == 0) ? '' : ', ';
    if ($item % 2 !== 0) {
        $res .=  "{$divider}{$item}";
    }
}

echo $res;

// №2
$arr = [2, 5, 9, 15, 1, 4];
$res = '';

foreach ($arr as $item) {
    $divider = (strlen($res) == 0) ? '' : ', ';
    if ($item > 3 and $item < 10) {
        $res .=  "{$divider}{$item}";
    }
}

echo $res;

// №3

$arr = [10, -1, 3, 5, -2];
$res = 0;

foreach ($arr as $item) {
    if ($item > 0) {
        $res += $item;
    }
}

echo $res;

// №4
$arr = [10, 20, 30, 50, 235, 3000];
$res = '';

foreach ($arr as $item) {
    $divider = strlen($res) == 0 ? '' : ', ';
    $str = (string) $item;
    if (in_array($str[0], [1, 2, 5])) {
        $res .= "{$divider}{$item}";
    }
}

echo $res;

// №5
$weekDays = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];
$res = '';
$divider = '<br>';

foreach ($weekDays as $key => $day) {
    if (in_array($key, [0, 6])) {
        $day = "<b>{$day}</b>";
    }
    if ($key == 6) {
        $divider = '';
    }
    $res .= $day . $divider;
}

echo $res;

// №6

$weekDays = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];
$currentDay = date('w');
$res = '';
$divider = '<br>';

foreach ($weekDays as $key => $day) {
    if (in_array($key, [0, 6])) {
        $day = "<b>{$day}</b>";
    }
    if ($key == 6) {
        $divider = '';
    }
    if ($key == $currentDay) {
        $day = "<i>{$day}</i>";
    }
    $res .= $day . $divider;
}

echo $res;
