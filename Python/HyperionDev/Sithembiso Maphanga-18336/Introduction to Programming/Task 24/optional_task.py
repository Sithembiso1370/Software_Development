# Write a program that will act as a calculator

# Create functions named add_num, subtract_num, multiply_num and
# divide_num that asks the user to enter two numbers and adds, subtracts,
# multiplies or divides them respectively.
def add_num(num1,num2):
    return int(num1)+int(num2)

def subtract_num(basenum,subtracting_num):
    return int(basenum)-int(subtracting_num)

def multiply_num(num1,num2):
    return int(num1)*int(num2)

def divide_num(basenum,dividing_num):
    return int(basenum)/int(dividing_num)


user_choice = int(input('''Input a number that corresponds to the option you would like to choose:
Option 1 - add
Option 2 - subtract
Option 3 - multiply
Option 4 - divide
'''))


if user_choice == 1:
    num1 = input("Enter first number to add : ")
    num2 = input("Enter 2nd number to add : ")
    print(f"The sum of {num1}+{num2} is {add_num(num1, num2)}")
elif user_choice == 2:
    base = input("Enter the number to subtract from : ")
    sub_num = input("Enter the number to subtract : ")
    print(f"The output of {base}-{sub_num} is {subtract_num(base,sub_num)}")
elif user_choice == 3:
    num1 = input("Enter first number to multiply : ")
    num2 = input("Enter 2nd number to multiply : ")
    print(f"The product of {num1}*{num2} is {multiply_num(num1,num2)}")
elif user_choice == 4:
    base = input("Enter number to divide : ")
    div_num = input("Enter number to divide by : ")
    print(f"The result of {base}/{div_num} is {divide_num(base,div_num)}")