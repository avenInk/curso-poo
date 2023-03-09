<?php

require_once 'car.php';
require_once 'account.php';

$car = new Car(new Account("Victor Armando", "ABCD1234"), 'ABCD1234');

$car->id = '5';

echo $car->id;
echo $car->driver->name;

?>