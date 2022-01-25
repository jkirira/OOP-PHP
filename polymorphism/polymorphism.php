<?php
interface actions
{
    public function move();
}

class Eagle implements actions {

    public function move() {
        echo "Flying";
    }
}

class Horse implements actions {

    public function move() {
        echo "Trot";
    }
}