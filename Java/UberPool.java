public class UberPool extends Car{
    String brand;
    String model;
    public UberPool(String license, Account driver, String brand, String model){
        super(license, driver);
        this.model = model;
        this.brand = brand;
    }
}
