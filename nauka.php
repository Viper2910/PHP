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

    echo "<br>"; //Wyswietlenie pustej linii 

    $msg = 5;   //Stworzenie zmiennej 'wiadomosci'
    echo "Masz " . $msg . " wiadomosci. <br>";   //Wyswietlenie liczby wiadomosci poprzez polaczenie elementow.

    $bank_balance = 0;  //Stworzenie zmiennej bank_balnce
    echo "Stank konta to: $bank_balance . <br>"; //Wyswietlenie zmiennej bank_balance
    if($bank_balance < 100){
        $money = 1000;
        $bank_balance += $money;    //Stworzenie petli warunkowej
    }
    echo "Nowy stan konta to: $bank_balance . <br>";   //Wyswietlenie wartosci zmiennej bank_balance po petli warunkowej.
?>