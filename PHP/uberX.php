<?php
require_once('car.php');

class UberX extends Car{
    public $model; 
    public $brand;

    public function __construct($driver, $license, $brand, $model){
        parent::__construct($driver, $license);
        $this->brand = $brand;
        $this->model = $model;
    }
    public function setpassenger($passenger){
        if($passenger==6){
            $this->passenger = $passenger;
        }else{
            echo "Necesitas seis pasajeros";
        }
    }
}

?>