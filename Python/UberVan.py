from car import Car

class UberVan(Car):
    typeCarAccepted = []
    seatsMaterial = []
    def __init__(self, driver, license, typeCarAccepted, seatsMaterial):
        super().__init__(driver, license)
        self.typeCarAccepted = typeCarAccepted
        self.seatsMaterial = seatsMaterial