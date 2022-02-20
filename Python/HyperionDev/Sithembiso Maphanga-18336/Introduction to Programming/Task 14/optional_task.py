# Create a new Python file in this folder called optional_task.py
# Get the user to input a number and cast it to an int. Store it in a variable
# called num.
num = int(input("Enter a number : "))

if num > 10:
    for i in range(0,num):
        print(num)
else:
    print("Sorry, too small.")