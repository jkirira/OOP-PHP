<?php
namespace Staff;

class User{
    public $name;
    public $designation = "Staff";

    public function getDesignation(){
        echo $this->designation;
    }
}

$user = new \Staff\User;
echo $user->designation;    // prints "Staff"