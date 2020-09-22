<?php

$object = new User; //Stworzenie obiektu klasy User.
print_r($object); echo "<br>";//Wyswietlenie danych.

$object->name = "Janek"; //Przypisanie wartosci dla obiektu.
$object->password = "haslo123";

print_r($object); echo "<br>"; //Wyswietlenie danych.

$object->save_user();

class User{ //Deklarowanie klasy.
    public $name, $password;
    
    function save_user(){ //Deklarowanie metody klasy.
        echo "Miejsce na kod funkcji";
    }
}

?>