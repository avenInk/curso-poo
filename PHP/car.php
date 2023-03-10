<?php
require_once('account.php');
class Car{
    public $id;
    public $license;
    public $driver;
    protected $passenger;

    public function __construct($driver, $license){
        $this->driver = $driver;
        $this->license = $license;
    }
    public function getPassenger(){
        return $this->passenger;
    }

    public function setpassenger($passenger){
        if($passenger==4){
            $this->passenger = $passenger;
        }else{
            echo "Necesitas cuatro pasajeros";
        }
    }

    public function printDataCar() {
        echo "
            Licencia: $this->license 
            Driver: {$this->driver->name} 
            Número de pasajeros: $this->passenger
            
    
        ";
    }
}
?>