# This program calculates a person's BMI.
# BMI stands for body mass index. It is used to calculate whether a person is overweight or not
age = int(input("Enter your age: "))
weight = float(input("Enter your weight in kg: "))
height = float(input("Enter your height in m: "))
BMI = round(weight/(height*height),2)
print("At age {}  your BMI is {}".format(age,BMI))
