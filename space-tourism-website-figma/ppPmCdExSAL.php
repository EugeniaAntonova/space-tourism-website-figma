<?php
// #1
$arr = [1, 2, 3];

if (count($arr) == 3) {
    $res = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $res += $arr[$i];
    }

    echo $res;
}