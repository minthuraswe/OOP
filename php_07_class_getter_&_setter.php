<?php

class Laptop
{
    private $name = "Acer";

    public function setter($data){
        $this->name = $data;
    }

    public function getter(){
        return $this->name;
    }
}

$acer = new Laptop;
echo $acer->setter("Lenovo");
echo $acer->getter() . '<br><hr>';


class Animal
{
    private $type = "Dog";

    public function setter($data){
        $this->name = $data;
    }

    public function getter(){
        return $this->name;
    }
}

$dog = new Animal;
echo $dog->setter('Mouse');
echo $dog->getter() . '<br><hr>';


class Fruit
{
    private $name = "Apple";

    public function setter($data){
        $this->name = $data;
    }
    
    public function getter(){
        return $this->name;
    }
}

$fruit = new Fruit;
echo $dog->setter('Orange');
echo $dog->getter() . '<br><hr>';