# Create a program called task1.py
# This program needs to display the timetables for any number.

number_entered = int(input("Enter any number"))

for i in range(number_entered):
    # print(f" i = {i}")
    print(f"{number_entered}*{i} = {number_entered*i}")
print("...")
print(f"{number_entered}*{72} = {number_entered*72}")