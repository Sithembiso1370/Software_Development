# Create a new file called even.py.
#1 Write a program that asks the user to enter a number.

#2 Make use of the while loop repetition structure so the program prints out
# all the even numbers from 1 up to (and possibly including) the number
# given by the user.

# while True:
number = int(input("Enter a Number : "))
count = 1

while count <= number:
    if count % 2 == 0:
        print(f"even number = {count}")
        count += 1
    elif count % 2 != 0:
        count += 1












