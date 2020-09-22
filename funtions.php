<?php

echo fix_names ("WILIAM", "tomasz", "domiNIK"); //Wyswietlenie wynikow dziala funkcji fix_names

function fix_names($name_1, $name_2, $name_3){ //Zdefiniowanie funkcji wraz z jej parametrami 
    $name_1 = ucfirst(strtolower($name_1)); //Zamiana lancucha znakow podanego w parametrze najpierw na male litery a nastepnie zmiana pierwszej litery na wielka.
    $name_2 = ucfirst(strtolower($name_2));
    $name_3 = ucfirst(strtolower($name_3));

    return $name_1 . " " . $name_2 . " " . $name_3; //Zwrocenie wartosci zamienionych stringow
}

?>