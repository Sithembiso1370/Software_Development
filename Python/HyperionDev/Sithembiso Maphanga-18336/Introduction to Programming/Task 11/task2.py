# Create a new Python file in this folder called task2.py.
# This program will be used to calculate the area that the foundation of a
# building covers. This program should

#1. Ask the user to enter the shape of the building (square, rectangularor round).
# Area of rectangle = Length * Width
# A = πr2/ a = r**2*math.pi
# Area of square = Length (or width, whichever) to the power of 2
import math

building_shape = input("Enter the shape of the building (square, rectangular or round) ")
shape_Area = 0


if building_shape.lower() == "square":
    square_length = int(input(f"Enter the {building_shape.lower()}'s length"))
    shape_Area = square_length*square_length

elif building_shape.lower() == "rectangular":
    rect_length = int(input(f"Enter the {building_shape.lower()}'s length"))
    rect_width = int(input(f"Enter the {building_shape.lower()}'s width"))
    shape_Area = rect_length*rect_width

elif building_shape.lower() == "round":
    circ_radius = int(input(f"Enter the {building_shape.lower()} radius"))
    shape_Area = circ_radius**2 * math.pi


print(f" The area that will be taken by the  {building_shape}  foundation is : {round(shape_Area,2)}")