<?php

trait Laptop{
    public $name = "acer";
    public $ram = "4 GB";
    public $cpu = "core i3";
}

trait Animal{
    public $type = "dog";
    public $color = "black";
    public $behavior = "barking";
}

class Fruit{
    use Laptop;
    use Animal;
    // use Laptop,Animal;

    public function result(){
        return "the result is by using trait.";
    }
}

$fruit = new Fruit;
echo 'Name = ' . $fruit->name . '<br>';
echo 'Ram = ' . $fruit->ram  . '<br>';
echo 'CPU = ' . $fruit->cpu  . '<br><hr>';
echo 'Type = ' . $fruit->type . '<br>';
echo 'Color = ' . $fruit->color . '<br>';
echo 'Behavior = ' . $fruit->behavior . '<br><hr>';
echo $fruit->result();