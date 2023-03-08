class Account:
    def __init__(self, id, name, document, email, password):
        self.id = int(id)
        self.name = str(name)
        self.document = str(document)
        self.email = str(email)
        self.password = str(password)
