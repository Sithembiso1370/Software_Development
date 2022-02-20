import statistics
import math
# Create a new Python file in this folder called float_manipulation.py

# You will need to import the math module and use its built-in functions to complete this task.

# Write a program that starts by asking the user to input 10 floats (these can
# be a combination of whole numbers and decimals).

user_inputs = []
counter = 0



while counter < 10:
    counter += 1
    User_inp = float(input("Enter a Float"))
    # Store these numbers in a list.
    user_inputs.append(User_inp)


# Find the total of all the numbers and print the result.
print(f"total : {math.fsum(user_inputs)}")

# Find the index of the maximum and print the result.
print(f"index of the maximum : {user_inputs.index(max(user_inputs))}")

# Find the index of the minimum and print the result.
print(f"index of the minimum : {user_inputs.index(min(user_inputs))}")

# Calculate the average of the numbers and round off to 2 decimal places.
# Print the result.
print(f"The average number : {round(math.fsum(user_inputs)/len(user_inputs),2)}")


# Find the median number and print the result.
print(f"The median number : {statistics.median(user_inputs)}")




