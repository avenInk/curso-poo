seatsMaterial
typeCarAccepted

<?php

use function PHPSTORM_META\type;

require_once("car.php");

class uberVan extends Car{
    public $seasMaterial;
    public $typeCarAccepted;

    public function __construct($driver, $license, $typeCarAccepted,$seasMaterial){
        parent::__construct($license, $driver);
        $this->driver = $driver;
        $this->license = $license;
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seasMaterial = $seasMaterial;
    }
}


?>