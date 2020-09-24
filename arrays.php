<?php

$p1 = array("Ksero", "Atrament", "Laser", "Foto"); //Stworzenie prostej listy.

echo "element p1: " . $p1[2] . "<br>"; //Wyswietlenie trzeceigo elementu listy.

$p2 = array('copier' => "Do kserokopiarek",    //Stworzenie tablicy asocjacyjnej.
            'inker' => "Do drukarek atramentowych",
            'laser' => "Do drukarek laserowych",
            'photo' => "Papier fotograficzny");

echo "element p2: " . $p2['inker'] . "<br>"; //Wyswietlenie elementu tablicy asocjacyjnej.

?>