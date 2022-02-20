# Create a Python file called control.py in this folder.
# This is going to expand on the first control structure task we created.

#1. Write code to take in a user’s age using input() and store their age in an
# integer variable called age.
age = int(input("Enter your age : "))

#2. Then check if the user’s age is 18 or older. If the user is 18 or older, print out
# the message “You are old enough!”.
# Else if they are over 16 but under 18, print “Almost there”.
# Otherwise print “You’re just too young!”.
# You should use one if, elif and else statement to do this.

if age >= 18:
    print("You are old enough!")
elif age > 16 & age < 18:
    print("Almost there")
else:
    print("You’re just too young!")

