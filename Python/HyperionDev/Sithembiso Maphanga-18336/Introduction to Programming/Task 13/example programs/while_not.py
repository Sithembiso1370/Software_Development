import random
num = random.randint(1,50)
num_guess = int(input("Guess a number from 1 to 50: "))

while num_guess != num:
    if num_guess < num:
        num_guess = int(input("To small! Guess another number from 1 to 50: "))
    else:  num_guess = int(input("To big! Guess another number from 1 to 50: "))
    
print("You guessed correctly!")
