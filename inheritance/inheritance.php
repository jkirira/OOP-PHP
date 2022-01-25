<?php

class Animal {
    const heart;
    public $eyes = 2;

    public function walk(){
        echo 'walking';
    }

    protected function stand(){
        echo 'stand';
    }

    private function eat(){
        echo 'eating';
    }

}

class Dog extends Animal {
    public $name = 'Dog';
}

class Eagle extends Animal {
    public $name = 'Eagle';
}
