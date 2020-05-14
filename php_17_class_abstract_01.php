<?php

abstract class Member{
    public $name = "Kyaw Kyaw";

    public abstract function invite();
}

abstract class GoldMember extends Member{
    public function invite(){
        return "Do you want to play with me?";
    }

    public abstract function play();
}

class DiamondMember extends GoldMember{

    public function play(){
        return "Yes, Let's play game";
    }
}

$mem = new DiamondMember;
echo $mem->invite() . '<hr>';
echo $mem->play() . '<hr>';
echo $mem->name;

