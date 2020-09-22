<?php

$object = new User; //Stworzenie obiektu klasy User.
print_r($object); //Wyswietlenie danych.

class User{ //Deklarowanie klasy.
    public $name, $password;
    
    function save_user(){ //Deklarowanie metody klasy.
        echo "Miejsce na kod funkcji";
    }
}

?>