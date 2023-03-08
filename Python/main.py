from car import Car
from account import Account

if __name__ == '__main__':
    print("hola buenas tardes")
    car = Car(Account("Victor", "B2"), "B2")
    print(vars(car))
    print(vars(car.driver))
