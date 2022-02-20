# Create a new Python file in this folder called optional_task.py.
#1. Ask the user to enter the lengths of all three sides of a triangle.
import math

side1 = int(input("Enter length of side one of the triangle"))
side2 = int(input("Enter length of side 2 of the triangle"))
side3 = int(input("Enter length of side 3 of the triangle"))

#2. Calculate the area of the triangle.
# half the diameter/s = (side1 + side2 + side3)/2
# area = √(s(s-a)*(s-b)*(s-c))
# therefore
s= side1 + side2 + side3
# print(str(s))
#3. Print out the area.

area = math.sqrt(s*((s-side1)*(s-side2)*(s-side3)))
print("area = " + str(round(area,2)))