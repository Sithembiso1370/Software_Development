# Create a Python file called full_name.py in this folder.
# This program will be used to validate that a user enters inputs at least two
# names when asked to enter their full name.
#1. Ask the user to input their full name.

fullName = input("Enter your full name")
# print(len(fullName))
if len(fullName) == 0:
    print("You haven’t entered anything. Please enter your full name.")
elif len(fullName) < 4:
    print("You have entered less than 4 characters. Please make sure that you have entered your name and surname.")
elif len(fullName) > 25:
    print("You have entered more than 25 characters. Please make sure that you have only entered your full name.")
else:
    print("Thank you for entering your name.")


