var car = new Car("aeov040", new Account("Victor", "aeov040"));
car.passenger = 4;
car.printDataCar()

var uberX = new UberX("aeov040", new Account("Victor Armando", "aeov040"), "Mercedes", "Benz");
uberX.passenger = 4;
uberX.printDataCar();
console.log("Car: " + uberX.brand + " Model: " + uberX.model)