<?php

// №1

$arr = [1, 2, 3, 4, 5];

foreach ($arr as $elem);
    echo $elem;
    
// ! this will be considered as a cycle without a body, thus the $elem = 5; only 5 will be echoed