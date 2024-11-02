# def sample(*args):
#     for i, j in enumerate(args):
#         print(f"{i} index: {j}")


# sample(12, 13, 155, 3453)


# def wrapper():
#     a = 10
#     b = 20
#     def add(a, b):
#         print(a+b)
    
#     return add

# var = wrapper()
# print(var(1, 3))


class Mic:

    color = 'blue'

    def message(self):
        print("This is a message from class Mic")

    @staticmethod
    def staticMessage():
        print("This is a static message")