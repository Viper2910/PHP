<?php
$name_a = "WILHELM";    //Zadeklarowanie zmiennych
$name_b = "dorota";
$name_c = "tadeUSZ";


echo fix_names ("WILIAM", "tomasz", "domiNIK"); //Wyswietlenie wynikow dziala funkcji fix_names

function fix_names($name_1, $name_2, $name_3){ //Zdefiniowanie funkcji wraz z jej parametrami 
    $name_1 = ucfirst(strtolower($name_1)); //Zamiana lancucha znakow podanego w parametrze najpierw na male litery a nastepnie zmiana pierwszej litery na wielka.
    $name_2 = ucfirst(strtolower($name_2));
    $name_3 = ucfirst(strtolower($name_3));

    return $name_1 . " " . $name_2 . " " . $name_3; //Zwrocenie wartosci zamienionych stringow.
}

echo "<br>";

$names = change_names_letters("WILIAM", "tomasz", "domiNIK"); //Przypisanie wyniku funkcji change_names_letters to zmiennej names.
echo $names[0] . " " . $names[1] . " " . $names[2]; //Wyswietlenie wynikow dziala funkcji change_names_letters.

function change_names_letters($name_1, $name_2, $name_3){   //Zdefiniowanie funkcji wraz z parametrami.
    $name_1 = ucfirst(strtolower($name_1)); //Zamiana lancucha znakow podanego w parametrze najpierw na male litery a nastepnie zmiana pierwszej litery na wielka.  
    $name_2 = ucfirst(strtolower($name_2));
    $name_3 = ucfirst(strtolower($name_3));

    return array($name_1, $name_2, $name_3);    //Zwrocenie wartosci zmienionych stringow poprzez tablice.
}

echo "<br>";

echo $name_a . " " . $name_b . " " . $name_c . "<br>";  //Wyswietlenie zmiennych przed modyfikacja
fix_new_names();    //Odpalenie funkcji
echo $name_a . " " . $name_b . " " . $name_c . "<br>";  //Wyswietlenie zmodyfikowanych stringow

function fix_new_names(){   //Zdefiniowanie funkcji ze zmiennymi globalnymi
    global $name_a; $name_a = ucfirst(strtolower($name_a));
    global $name_b; $name_b = ucfirst(strtolower($name_b));
    global $name_c; $name_c = ucfirst(strtolower($name_c));
}

?>