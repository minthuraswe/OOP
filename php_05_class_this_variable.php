<?php

class Laptop
{
    public $name = "Acer";

    public function reName(){
        $this->name =  "Lenovo";
        $this->ram = "8 GB";
        $this->model = "core i5";
    }
}

$dell = new Laptop;
echo $dell->reName();
echo 'Name = ' . $dell->name . '<br>';
echo 'Ram = ' . $dell->ram . '<br>';
echo 'Model = ' . $dell->model . '<br><hr>';


class Animal
{
    public $type = "Dog";

    public function reName(){
        $this->type = "Cat";
        $this->color = "yellow";
        $this->behavior = "Kill the mouse";
    }
}

$cat = new Animal;
echo $cat->reName();
echo 'Type = ' . $cat->type . '<br>';
echo 'Color = ' . $cat->color . '<br>';
echo 'Behavior = ' . $cat->behavior . '<br><hr>';


class Fruit
{
    public $name = "apple";

    public function reName(){
        $this->name = "pineapple";
        $this->color = "Yellow";
        $this->taste = "sweet";
    }
}

$fruit = new Fruit;
echo $fruit->reName();
echo 'Name = ' . $fruit->name . '<br>';
echo 'Color = ' . $fruit->color . '<br>';
echo 'Taste = ' . $fruit->taste . '<br><hr>';