# Create a new Python file in this folder called task4.py.
# Create a program that asks the user to enter an integer and determine if it
# is:divisible by 2 and 5,divisible by 2 or 5,not divisible by 2 or 5
user_int = int(input("Enter an integer "))
result = ""
divisible_by_2_and_5 = False
divisible_by_2_or_5 = False
not_divisible_by_2_or_5 = False

# divisible_by_2_and_5
if user_int%2 == 0 and user_int%5 == 0:
    divisible_by_2_and_5 = True
    result += f"is the value is divisible by 2 and 5  = {divisible_by_2_and_5} \n"
else:
    divisible_by_2_and_5 = False
    result += f"is the value divisible by 2 and 5 = {divisible_by_2_and_5} \n"

# divisible_by_2_or_5
if user_int%2 == 0 or user_int%5 == 0:
    divisible_by_2_or_5 = True
    result += f"is the value divisible_by_2_or_5 = {divisible_by_2_or_5} \n"
else:
    divisible_by_2_or_5 = False
    result += f"is the value divisible by 2 or 5 = {divisible_by_2_or_5} \n"

# print(f"user_int%2 = {user_int%2} and user_int%5 = {user_int%5}")
# not_divisible_by_2_or_5
if user_int%2 != 0 or user_int%5 != 0:
    not_divisible_by_2_or_5 = True
    result += f"is the value not divisible by 2 or 5 = {not_divisible_by_2_or_5}"
else:
    not_divisible_by_2_or_5 = False
    result += f"is the value not divisible by 2 or 5  = {not_divisible_by_2_or_5}"

print(result)
