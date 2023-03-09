<?php
require_once('car.php');

class UberPool extends Car{
    public $model; 
    public $brand;

    public function __construct($driver, $license, $brand, $model){
        parent::__construct($license, $driver);
        $this->brand = $brand;
        $this->model = $model;
    }
}

?>