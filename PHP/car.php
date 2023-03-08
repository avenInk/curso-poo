<?php

class Car{
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __construct($driver, $license){
        $this->driver = $driver;
        $this->license = $license;
    }
}