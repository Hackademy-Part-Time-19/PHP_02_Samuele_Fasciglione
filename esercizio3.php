<?php

$numeri = [2, 5, 8, 11, 14, 17, 20, 23, 26, 29];

$somma = 0;
$num = 0;

foreach ($numeri as $elementi) {
    if ($elementi % 2 == 0) {
        $somma += $elementi;
        $num++;
    }
}

$media = $somma / $num;

echo $num . 'numeri pari, la media è ' . $media;
