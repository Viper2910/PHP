<?php

$object = new User; //Stworzenie obiektu klasy User.
print_r($object); echo "<br>";//Wyswietlenie danych.

$object->name = "Janek"; //Przypisanie wartosci dla obiektu.
$object->password = "haslo123";

print_r($object); echo "<br>"; //Wyswietlenie danych.

$object->save_user();


$object_1 = new NextUser;
$object_1->name = "Warian";
$object_2 = clone $object_1; //Clonowanie obiektu klasy NextUser.
$object_2->name = "Anduin";

echo "Object 1 name = " . $object_1->name . "<br>";
echo "Object 2 name = " . $object_2->name . "<br>";


class User{ //Deklarowanie klasy.
    public $name, $password;
    
    function save_user(){ //Deklarowanie metody klasy.
        echo "Miejsce na kod funkcji <br>";
    }
}

Class NextUser{ //Deklarowanie klasy 
    public $name;
}

?>