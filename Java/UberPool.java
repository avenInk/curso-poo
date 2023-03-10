public class UberPool extends Car {
    String brand;
    String model;
    private Integer passenger;

    public UberPool(String license, Account driver, String brand, String model) {
        super(license, driver);
        this.model = model;
        this.brand = brand;
    }

    @Override
    public void setPassenger(Integer passenger) {
        if (passenger == 6) {
            this.passenger = passenger;
        } else {
            System.out.println("Error, passenger isn't correct to this type of car.");
        }
    }

    public Integer getPassenger() {
        return passenger;
    }

}
