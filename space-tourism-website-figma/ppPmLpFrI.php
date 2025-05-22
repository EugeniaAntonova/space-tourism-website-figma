<?php

// №1

$divider = ', ';

for ($i = 1; $i <= 100; $i++) {
    if ($i == 100) $divider = '';
    echo "{$i}{$divider}";
}

// №2

$divider = ', ';

for ($i = 11; $i <= 33; $i++) {
    if ($i == 33) $divider = '';
    echo "{$i}{$divider}";
}

// №3

$divider = ', ';

for ($i = 100; $i <= 1; $i--) {
    if ($i == 1) $divider = '';
    echo "{$i}{$divider}";
}

// №4

$divider = ', ';

for ($i = 1; $i <= 99; $i += 2) {
    if ($i == 99) $divider = '';
    echo "{$i}{$divider}";
}

// №5

$divider = ', ';

for ($i = 100; $i >= 0; $i--) {
    if ($i == 0) $divider = '';
    echo "{$i}{$divider}";
}
