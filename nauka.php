<?php
    $mycounter = 1; //zmienna numeryczna
    $mystring = "Hej!"; //zmienna tekstowa
    $myarray = array("Jeden", "Dwa", "Trzy"); //zmienna tablicowa

    $username = "Jan Kowalski";
    echo $username; //wyswietlenie zmiennej $username

    echo "<br>"; //Wyswietlenie pustej linii 

    $team = array('Jan', 'Andrzej', 'Kamil', 'Ola', 'Ania'); // Stworzenie tablicy ze zmiennymi typu string 
    echo $team[3];  //Wyswietlenie 4 elementu tablicy

    echo "<br>"; //Wyswietlenie pustej linii 

    $oxo = array(array('x', ' ', 'o'),
                array('o', 'o', 'x'),
                array('x', 'o', ' '));  //Stworzenie tablicy dwuwymarowej
    echo $oxo[1][2];
?>