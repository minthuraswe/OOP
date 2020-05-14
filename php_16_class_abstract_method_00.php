<?php

abstract class Laptop{
    public $name = "acer";

    public abstract function setName($name);     
    public abstract function useName();
}

class Dell extends Laptop{

    public function setName($name){   
        $this->name = $name;
    }

    public function useName(){
        return "I am abstract method of  = " . $this->name;
    }
}

$dell = new Dell;
$dell->setName('Dell');
echo $dell->useName() . '<br><hr>';


abstract class Animal{
    public $type = "dog";

    public abstract function setName($name);
    public abstract function useName();
}

class dog extends Animal{
    public function setName($name){
        $this->name = $name;
    }

    public function useName(){
        return "I am abstract method of = " .   $this->name;
    }
}

$cat = new dog;
$cat->setName('Cat');
echo $cat->useName() .  '<br><hr>';


abstract class Fruit{
    public $name = "apple";

    public abstract function setName($name);
    public abstract function useName();

}

class orange extends Fruit{
    public function setName($name){
        $this->name = $name;
    }

    public function useName(){
        return "I am abstract method of = " . $this->name;
    }
}

$orange = new orange;
$orange->setName('Orange');
echo $orange->useName();