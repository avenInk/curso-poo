<?php
require_once('car.php');

class UberPool extends Car{
    public $model; 
    public $brand;

    public function __construct($driver, $license, $brand, $model){
        parent::__construct($driver, $license);
        $this->brand = $brand;
        $this->model = $model;
    }
}

?>