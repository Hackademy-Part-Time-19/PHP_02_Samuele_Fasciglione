<?php

$Random_FRANCOO = [];

for ($i = 0; $i < 4; $i++) {

    $Random_FRANCOO[$i] = [];

    for ($a = 0; $a < 5; $a++) {
        $Random_FRANCOO[$i][$a] = rand(1, 100);
    }
}

print_r($Random_FRANCOO);
