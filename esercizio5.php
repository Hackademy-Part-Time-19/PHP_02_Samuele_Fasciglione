<?php

/*$temperatura = 30;


if ($temperatura <15){
    echo "fa freddo";

}elseif ($temperatura >= 15 && $temperatura <=20){
    echo "fa caldo";
}elseif ($temperatura >20 && $temperatura <=25){
    echo "fa molto caldo";
}elseif ($temperatura >25){
    echo "fa molto molto caldo";
}*/


$temperature = ["Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9,];


foreach ($temperature as $chiave => $gradi) {

    if ($gradi < 15) {
        echo "a" . " " . $chiave . " " . "fa freddo" . " " . "ci sono" . " " . $gradi . "°\n";
    } elseif ($gradi >= 15 && $gradi <= 20) {
        echo "a" . " " . $chiave . " " . "fa caldo" . " " . "ci sono" . " " . $gradi . "°\n";
    } elseif ($gradi > 20 && $gradi <= 25) {
        echo "a" . " " . $chiave . " " . "fa molto caldo" . " " . "ci sono" . " " . $gradi . "°\n";
    } elseif ($gradi > 25) {
        echo "a" . " " . $chiave . " " . "fa molto molto caldo" . " " . "ci sono" . " " . $gradi . "°\n";
    }
}
