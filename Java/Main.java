public class Main{
    public static void main(String[] args) {
        System.out.println("hola mundo");
        Car car1 = new Car("AEOV040225HQRUSE99", new Account("Victor Armando", "AEOV040225HQRUSE99"));
        car1.passenger = 3;
        car1.printDataCar();

        Car car2 = new Car("ASF040121HQRUSE99",new Account("Francisco Aban", "ASF040121HQRUSE99"));
        car2.passenger = 4;
        car2.printDataCar();
    }
}