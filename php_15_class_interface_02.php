<?php

interface index{
    public function indexPage($data);
}

interface contact{
    public function indexPage($data);
}

class Develop implements index,contact{

    private $data;

    public function indexPage($data){
        $this->data = $data;
    }

    public function setDesign(){
        echo '<pre>' . print_r($this->data, true) . '</pre>';
    }
}

$index = new Develop;
$indexAry = ['Header', 'Menu', 'Slider', 'Content', 'Footer'];
$index->indexPage($indexAry);
echo $index->setDesign() . '<hr>';

$contact = new Develop;
$contactAry = ['Header', 'Menu', 'contactForm', 'Footer'];
$contact->indexPage($contactAry);
echo $contact->setDesign();