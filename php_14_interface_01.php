<?php

interface Design{
    public function setButton($btn);
    public function setInput($input);
}

class Develop implements Design{

    private $btn;
    private $input;

    public function setButton($btn){
        $this->btn = $btn;
    }

    public function useButton(){
        return "I am Button of UI design = " . $this->btn;
    }

    public function setInput($input){
        $this->input = $input;
    }

    public function useInput(){
        return "I am Input of UI design = " . $this->input;
    }
}

$dev = new Develop();
$dev->setButton('Hover Button');
$dev->setInput('Rounded Input');
echo $dev->useButton() . '<br><hr>';
echo $dev->useInput();

