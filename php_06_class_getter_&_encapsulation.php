<?php

class Laptop
{
    private $name = "Acer";

    public function getter(){
        return $this->name;
    }
}

$acer = new Laptop;
echo $acer->getter() . '<br><hr>';


class Animal
{
    private $type = "Cat";

    public function getter(){
        return $this->type;
    }
}

$cat = new Animal;
echo $cat->getter() . '<br> <hr>';


class Fruit
{
    private $name = "Pineapple";

    public function getter(){
        return $this->name;
    }
}

$fruit = new Fruit;
echo $fruit->getter() . '<br><hr>';