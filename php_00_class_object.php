<?php


class Laptop
{
    //
}

$acer = new Laptop;
$acer->name = "Aspire E 14";
$acer->ram = "4 GB";
$acer->model = "core i3";

echo "<b>For Laptop Object</b>  <br>";
echo 'Name = ' .$acer->name . '<br>';
echo 'Ram = ' .$acer->ram . '<br>';
echo 'Model = ' .$acer->model . '<br><hr>'; 


class Animal
{
    //
}

$dog = new Animal;
$dog->name = "Bobo";
$dog->color = "Black";
$dog->behavior = "Barking";

echo "<b>For Animal Object</b> <br>" ;
echo 'Name = ' .$dog->name .'<br>';
echo 'Color = ' .$dog->color . '<br>';
echo 'Behavior = ' .$dog->behavior . '<br><hr>';

class Fruit
{
    //
}

$fruit = new Fruit;
$fruit->name = "apple";
$fruit->color = "red";
$fruit->taste = "sweet";

echo "<b>For Fruit Object</b> <br>";
echo 'Name = ' .$fruit->name . '<br>';
echo 'Color = ' .$fruit->color . '<br>';
echo 'Taste = ' .$fruit->taste . '<br><hr>';

