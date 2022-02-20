# Create a Python file called optional_task.py in this folder.
# This program should test whether a number is odd or even.

#1. Ask the user to enter an integer.

int_input = int(input("Enter an integer"))

# print(str(int_input%2)) --test

if int_input%2 == 0:
    print(f"{int_input} is an even number")
else:
    print(f"{int_input} is an Odd number")