<?php

interface OnlineShop{
    public function createDesign();      
    public function createDevelopment();
    public function createPayment();
}

class Develop implements OnlineShop{   

    public function createDesign(){
        return "I am UI/UX Designer";
    }
    public function createDevelopment(){
        return "I am Backend Developer";
    }
    public function createPayment(){
        return "I am Backend Developer too";
    }
}

$dev = new Develop;
echo $dev->createDesign() . '<br><hr>';
echo $dev->createDevelopment() . '<br><hr>';
echo $dev->createPayment() . '<br><hr>';

