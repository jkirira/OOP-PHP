<?php
trait Breathe {
    public function BreatheIn() {
        echo 'Breathing In';
    }
    public function BreatheOut() {
        echo 'Breathing Out';
    }
}

class Person {
    use Breathe;
}

class Animal {
    use Breathe;
}