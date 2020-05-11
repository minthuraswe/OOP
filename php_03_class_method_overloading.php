<?php

class Laptop
{
    public function doIt($default = 'ACER'){
        return 'Name = ' . $default;
    }
}

$num = new Laptop;
echo $num->doIt() . '<br>'; //default value output
echo $num->doIt('DELL') . '<br>'; 
echo $num->doIt('Lenovo') . '<br><hr>'; 


class Animal
{
    public function doIt($default = "Dog"){
        return 'Type = ' . $default;
    }
}

$dog = new Animal;
echo $dog->doIt() . '<br>';  //default value output
echo $dog->doIt('Cat') . '<br>';
echo $dog->doIt('Mouse') . '<br><hr>';


class Fruit
{
    public function doIt($default = 'Apple'){
        return 'Name = ' . $default;
    }
}

$fruit = new Fruit;
echo $fruit->doIt() . '<br>';  //default value output
echo $fruit->doIt('Orange') . '<br>';
echo $fruit->doIt('Pineapple') . '<br><hr>';