from car import Car

class UberPool(Car):
    def __init__(self, brand, model, driver, license):
        super().__init__(driver, license)
        self.brand = brand
        self.model = model