class Car{
    constructor(license, driver){
        this.id;
        this.license = license;
        this.driver = driver;
        this.passenger;
    }

    printDataCar(){
        console.log("License: " + this.license + " Driver: " + this.driver.name)
    }
}