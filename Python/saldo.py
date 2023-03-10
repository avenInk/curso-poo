class CuentaBancaria:
    def __init__(self, saldo_inicial):
        self._saldo = saldo_inicial
    
    def depositar(self, cantidad):
        self._saldo += cantidad
    
    def retirar(self, cantidad):
        if cantidad <= self._saldo:
            self._saldo -= cantidad
        else:
            print("No hay suficiente saldo.")
    
    def obtener_saldo(self):
        return self._saldo
    
cuenta = CuentaBancaria(500)
cuenta._saldo = 500000
print(cuenta._saldo)