import math as m

# reverse a string

a = "Hello"
print(a[::-1])

# swap numbers with and without using 3rd variable

b = 10
c = 20
d = b
b = c
c = d

print(f"with using 3rd variable: b: {b} and c: {c}")

e = 10
f = 20
e,f = f, e

print(f"with using 3rd variable: e: {e} and f: {f}")

# check for vowels in string

string = "Umbrella"
vowels = ['a', 'e', 'i', 'o', 'u']
vowel_count = 0

for char in string.lower():
    if char in vowels:
        vowel_count += 1
        print(f"Vowel {char} is in {string}")

print(f"total count: {vowel_count}")

num = int(input("Enter a number: "))

def isPrime(num):

    if(num == 0 or num == 1):
        return("The number is neither prime nor composite")

    if(num == 2):
        return(f"The number {num} is a prime number.")
        
    for i in range(2, int(m.sqrt(num))+1):
        if(num % i == 0):
            return "not a prime number"
    
    return("a prime number")

print(isPrime(num))