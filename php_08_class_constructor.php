<?php

class Laptop
{
    public function __construct(){
        echo "I am Constructor of magic method <br><hr>";
    }
}

$con = new Laptop;


class Animal
{
    public function __construct($name){
        echo "The type of animal = " . $name ;
    }
}

$con = new Animal('Dog <br>');
$con = new Animal('Cat <br>'); 
$con = new Animal('Mouse <br><hr>'); 


class Number
{
    public function __construct($num0, $num1, $num2){
        echo "Total Number = " . ($num0 + $num1 + $num2) . '<br>';
    }
}

$num = new Number(2, 4, 5);
$num = new Number(7, 9, 3); 
$num = new Number(6, 2, 76);