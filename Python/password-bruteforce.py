import random

user_pass = input(str("Enter a password:"))

payload = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 
'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 
'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 
'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z']

user_pass_length = len(user_pass)

i = 0

while(i == 0):
    print("bruteforcing the password...")
    generated_pass = (random.sample(payload, user_pass_length))
    print(''.join(generated_pass))


    if(''.join(generated_pass) == user_pass):
        print("Password brutefoce success! your password is: " + ''.join(generated_pass))
        i = 1
