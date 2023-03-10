<?php

require_once('car.php');
require_once('account.php');
require_once('uberPool.php');
require_once('uberBlack.php');
require_once('uberVan.php');
require_once('uberX.php');

$car = new UberX(new Account("Victor Armando", "ABCD1234"), 'ABCD1234', 'mercedes', 'benz');
$car->setpassenger(6);

echo $car->model;
$car->printDataCar();

$car4 = new UberPool(new Account("Victor Armando", "ABCD1234"), 'ABCD1234', 'mercedes', 'benz');
$car4->setpassenger(4);
$car4->printDataCar();
?>