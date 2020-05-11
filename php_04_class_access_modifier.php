<?php 

class Laptop
{
    public $name = "Acer";   //Anyone can access
    public $ram = "4 GB";
    public $model = "core i3";
}

$acer = new Laptop;
echo 'Name = ' . $acer->name . '<br>';
echo 'Ram = ' . $acer->ram . '<br>';
echo 'Model = ' . $acer->model . '<br><br>';


class Animal
{

    private $name = "Bobo";    //Only accessible inside Class (For Encapsulation)

}

class Fruit
{

    protected $name = "Mg Mg";   //Only accessible By Member Class (Extended Class/ Sub Class)

}


