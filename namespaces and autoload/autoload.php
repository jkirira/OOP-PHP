<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$user1  = new \Staff\User;

$user2 = new \Customers\User;


