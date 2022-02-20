# Create a new Python file in this folder called bmi_task.py in this folder.
# Create a program that calculates a person's BMI
# Ask the user to enter their weight in kg and their height in m

# weight = float(input("Enter your weight in kg : "))
# height = float(input("Enter your height in m : "))
#
# # Use the formula below to calculate the user's BMI:
# # BMI = (weight in kg) / ((height in m)*(height in m))
# user_status = ''
# # print(f"test BMI {str(weight/height*height)}")
# BMI = weight/height*height
# if BMI >30:
#     user_status = "obese"
# elif BMI >= 25 and BMI <= 30:
#     user_status = "overweight"
# elif BMI >= 18.5 and BMI <= 25:
#     user_status = "normal"
# else:
#     user_status = "underweight"
#
# print(f"The users BMI is {BMI} and the user is {user_status}")

weight = float(input("Enter your weight in kg : "))
height = float(input("Enter your height in m : "))

# Use the formula below to calculate the user's BMI:
# BMI = (weight in kg) / ((height in m)*(height in m))
user_status = ''
# print(f"test BMI {str(weight/height*height)}")
BMI = weight/height*height

if BMI < 18.5:
    user_status = "underweight"
elif 18.5 <= BMI < 25:
    user_status = "normal"
elif 25 <= BMI < 30:
    user_status = "overweight"
elif BMI >= 30:
    user_status = "obese"


print(f"The users BMI is {BMI} and the user is {user_status}")