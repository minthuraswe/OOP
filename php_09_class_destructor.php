<?php

class Greeting
{
    
    public function __construct(){
        echo "I am constructor of magic method and start Working!! <br><hr>";
    }

    public function sayHello($greet, $num){
        return "Person $num  = " . $greet . '<br>';
    }

    public function __destruct(){
        echo "I am destructor of magic method and class working is done <br>";
    }
}

$greet = new Greeting();
echo $greet->sayHello('Hey My Friend!!', 1);
echo $greet->sayHello('Hi  Sandra!!', 2);
echo $greet->sayHello('How are today?', 1);
echo $greet->sayHello('I\'m pretty good, thanks.', 2);
echo $greet->sayHello('excuse me, what language do you learn.', 1);
echo $greet->sayHello('I learn Spanish, what about you?', 2);
echo $greet->sayHello('I learn Japanese.', 1);
echo $greet->sayHello('Ok, it\'s pleasure to talk to u, see you next time.', 2);
echo $greet->sayHello('see you', 1);
echo '<hr>';

