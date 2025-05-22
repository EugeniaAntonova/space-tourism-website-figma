<?php
// №1
	$arr = [1, 2, 3, 4, 5];
    foreach($arr as $item) {
        echo ((string) $item ** 2) . ' ';
    }


// №2
	$arr = [1, 2, 3, 4, 5];
    $max = count($arr) - 1;
    $divider = '<br>';
    $i = 0;

    foreach ($arr as $item) {
        if ($i == $max) $divider = '';
        $i++;
        echo ((string) $item) . $divider;
    }

// №3
	$arr = [1, 2, 3, 4, 5];
    $max = count($arr) - 1;
    $divider = '<br>';
    $i = 0;
    $open = '<b>';
    $close = '</b>';

    foreach ($arr as $item) {
        if ($i == $max) $divider = '';
        $i++;
        echo $open . ((string) $item) . $close . $divider;
    }