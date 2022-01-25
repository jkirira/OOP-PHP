<?php
abstract class Lazy
{
    abstract function eat();
    abstract function sleep();

    public function isHungry(){
        $this->eat();
    }

}

class Developer extends Lazy {

    public function eat()
    {
        echo "eating";
    }

    public function sleep()
    {
        echo sleeping;
    }
}