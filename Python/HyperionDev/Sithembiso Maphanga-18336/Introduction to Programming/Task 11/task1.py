#1. Declare three variables called num1, num2 and num3. Assign each variable
# a number value.
num1 = 79
num2 = 79
num3 = 944

#2. Now, compare num1 and num2 and display the larger value.

if num1 > num2:
    print(f"num1 is greater and is equal to {num1}")
elif num2 > num1:
    print(f"num2 is greater and is equal to {num2}")
else:
    print("The numbers are equal")


#3. Next, determine whether num1 is odd or even and display the result.

# print(5%2) test even or odd
if num1%2 == 0:
    print("num1 is Even")
else:
    print("num1 is Odd")

varAt_pos1 = ""
varAt_pos2 = ""
varAt_pos3 = ""

# if num1 is the first,2nd or 3th position
if num1 > num2 and num1 > num3:
    varAt_pos1 = "num1"
elif num1 > num2 or num1 > num3:
    varAt_pos2 = "num1"
else:
    varAt_pos3 = "num1"

# if num2 is the first,2nd or 3th position
if num2 > num1 and num2 > num3:
    varAt_pos1 = "num2"
elif num2 > num1 or num2 > num3:
    varAt_pos2 = "num2"
else:
    varAt_pos3 = "num2"

# if num3 is the first,2nd or 3th position
if num3 > num1 and num3 > num2:
    varAt_pos1 = "num3"
elif num3 > num1 or num3 > num2:
    varAt_pos2 = "num3"
else:
    varAt_pos3 = "num3"

# print(f"Test variable at: \n Position 1 = {varAt_pos1}  \n Position 2 = {varAt_pos2} \n Position 3 = {varAt_pos3}")