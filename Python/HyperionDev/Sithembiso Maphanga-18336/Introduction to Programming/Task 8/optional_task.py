# Create a Python file called optional_task.py in this folder
# This program will help the user decide what to wear. To determine what
# to wear, you need to determine whether the temperature is greater than
# 20 degrees, whether it is the weekend, and whether it is sunny.

#1. Declare boolean variables for each one of these characteristics

temp_great_than_20 = False
is_weekend = False
is_sunny = False

#2. Then, ask the user a series of “yes or no” questions for each variable, and
# change the boolean variable to True or False based on their answer.

if input("is the temperature is greater than 20 degrees ? ").lower() == "yes":
    temp_great_than_20 = True
else:
    temp_great_than_20 = False

if input("is it a weekend ? ").lower() == "yes":
    is_weekend = True
else:
    is_weekend = False

if input("is it sunny ? ").lower() == "yes":
    is_sunny = True
else:
    is_sunny = False

#2. If the temperature is greater than 20 degrees, then the user should wear a short-sleeved shirt.

if str(temp_great_than_20).lower() == "true":
    shirtTo_wear = "short-sleeved"
else:
    shirtTo_wear = "long-sleeved"
# print(shirtTo_wear)

if str(is_weekend).lower() == "true":
    shortTo_wear = "shorts"
else:
    shortTo_wear = "jeans"

if str(is_sunny).lower() == "true":
    hatTo_wear = "cap"
else:
    hatTo_wear = "raincoat"

print(f"\nThe users outfirt should be a {shirtTo_wear} shirt, {shortTo_wear} and a {hatTo_wear}")