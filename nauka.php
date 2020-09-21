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

    for ($fuel = 50 ; $fuel >= 0 ; $fuel--)  //Stworzenie petli for do zmniejszania wartosci zmiennej fuel od 100 do 0.
    {
        echo "$fuel <br>"; //Wyswietlanie wartosci zmiennej fuel
        if ($fuel <= 20 && $fuel > 0){ //Stworzenie petli if do prawdzenie czy wartosc zmiennej fuel jest mniejsza lub rowna 20 ale wieksza od 0 i wyswietlenie komunikatu jesli tak.
            echo "Low fuel lvl! <br>";
        }

        elseif ($fuel == 0) { //Stworzenie kolejnego warunku sprawdzajacego czy wartosc zmiennej fuel jest rowny 0.
            echo "You have no fuel :(";
        }
    }

?>