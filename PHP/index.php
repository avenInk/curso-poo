<?php

require_once('car.php');
require_once('account.php');
require_once('uberPool.php');
require_once('uberBlack.php');
require_once('uberVan.php');
require_once('uberX.php');

$car = new UberX(new Account("Victor Armando", "ABCD1234"), 'ABCD1234', 'mercedes', 'benz');

echo $car->model;
$car->printDataCar();

?>