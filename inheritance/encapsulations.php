<?php
class User
{

    private $name;
    private $age;

    public function getAge()
    {
        echo $this->age;
    }

    public function getName()
    {
        echo $this->name;
    }
}