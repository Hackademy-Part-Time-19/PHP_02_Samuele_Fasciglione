<?php

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Giorgia', 'surname' => 'Bianchi', 'gender' => 'F'],
    ['name' => 'Optimus', 'surname' => 'Prime', 'gender' => 'NB']
];

foreach ($users as $persone) {
    if ($persone['gender'] == 'M') {
        echo "Buongiorno Sig.$persone[name] $persone[surname]\n";
    } else if ($persone['gender'] == 'F') {
        echo "Buongiorno Sig.ra$persone[name] $persone[surname]\n";
    } else if ($persone['gender'] == 'NB') {
        echo "Buongiorno $persone[name] $persone[surname]\n";
    }
}


/*foreach ($users as $element) {

    switch ($element['gender']) {
        case 'M':
            echo "Buongiorno Sig.$element[name] $element[surname]\n";

            break;

        case 'F':
            echo "Buongiorno Sig.ra$element[name] $element[surname]\n";

            break;

        case 'NB':
            echo "Buongiorno $element[name] $element[surname]\n";
    }
}*/
