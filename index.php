<?php

// POO Basics 2

//Bike
require_once 'Bicycle.php';
$bicycle = new Bicycle('blue', 1);
var_dump($bicycle);


//Car
require_once 'Car.php';
$car = new Car('green', 4, 'electric');
var_dump($car);


//Truck 1
require_once 'Truck.php';
$truck1 = new Truck(50, 'Yellow', 2, 'fuel');
$truck1->setLoad(35);
var_dump($truck1);

echo $truck1->load();
echo '<br> <br>';

echo $truck1->forward();
echo '<br> Vitesse du camion : ' . $truck1->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck1->brake();
echo '<br> Vitesse du camion : ' . $truck1->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck1->brake();
echo '<br> <br>';

//Truck 2
require_once 'Truck.php';
$truck2 = new Truck(67, 'Purple', 3, 'electric');
$truck2->setLoad(68);
var_dump($truck2);

echo $truck2->load();
echo '<br>';