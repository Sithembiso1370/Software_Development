# Create a new Python file in this folder called optional_task.py


#1. Use input to get any two numbers from the user.
# Store these numbers in variables called num1 and num2.
num1 = input("Enter first number")

num2 = input("Enter Second number")
# 2.Now swap these two numbers around. The number stored in num1
# should now be stored in num2, and the number stored in num2 should
# now be stored in num1.
#because
# 1+2 = sum of the 2
# numb1+num2 = sum of the 2

#swap the variable because they sum num1+num2
num1, num2 = num2, num1

# there num1 originals value after swap will be the sum less the new value ((str(num1) + str(num2)) - num1 = num2
# there num2 originals value after swap will be the sum less the new value ((str(num1) + str(num2)) - num2 = num1
#3. Print out the values of num1 and num2 before the swap, and the values
# of num1 and num2 after the swap.
print("Num1 BeforeSwapp = " + str(num2))
print("Num2 BeforeSwapp = " + str(num1))
print("Num1 Afterswap = " + str(num1))
print("Num2 Afterswap = " + str(num2))




