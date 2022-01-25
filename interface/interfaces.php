<?php
interface lazy
{
    public function eat();
    public function sleep();
}

class Developer implements Lazy {

    public function eat()
    {
        echo "eating";
    }

    public function sleep()
    {
       echo sleeping;
    }
}

//  Will output an error

//class WorldClassDeveloper implements Lazy {
//
//}
