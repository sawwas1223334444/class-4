<?php


require_once '51.php';

$newCar = new Car('BMW','X5', 2020 , 50000);

echo $newCar->getInfo();

$newCar->drive(125);

echo $newCar->getInfo(); 
