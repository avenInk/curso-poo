<?php
require_once('account.php');
class Car{
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __construct($driver, $license){
        $this->driver = $driver;
        $this->license = $license;
    }

    public function printDataCar(){
        echo "licencia: $this->license Driver: ".$this->driver->name;
    }
}
?>