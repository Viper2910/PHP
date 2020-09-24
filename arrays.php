<?php

$p1 = array("Ksero", "Atrament", "Laser", "Foto"); //Stworzenie prostej listy.
$j = 0;

echo "element p1: " . $p1[2] . "<br>"; //Wyswietlenie trzeceigo elementu listy.

$p2 = array('copier' => "Do kserokopiarek",    //Stworzenie tablicy asocjacyjnej.
            'inker' => "Do drukarek atramentowych",
            'laser' => "Do drukarek laserowych",
            'photo' => "Papier fotograficzny");

echo "element p2: " . $p2['inker'] . "<br>"; //Wyswietlenie elementu tablicy asocjacyjnej.

echo "Elementy tablicy p1: <br>";
foreach($p1 as $element){ //Wyswitlenie elementow listy p1 poprzez petle foreach .. as.
    echo "$j : " . $element . "<br>";
    $j++;
}

echo "Elementy tablicy p2: <br>";
foreach($p2 as $item => $description){ //Wyswitlenie elementow listy asocjacyjnej p2 poprzez petle foreach .. as.
    echo "$item : $description <br>";
}

$p1_count = count($p1); //Sprawdzenie ilosci elementow w tablicy.
$p2_count = count($p2);
echo "Tablica p1 ma : $p1_count elementow <br>";
echo "Tablica p2 ma : $p2_count elementow <br>";

?>