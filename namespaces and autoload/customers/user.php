<?php
namespace Customers;

class User{
    public $name;
    public $designation = "User";

    public function getDesignation(){
        echo $this->designation;
    }
}