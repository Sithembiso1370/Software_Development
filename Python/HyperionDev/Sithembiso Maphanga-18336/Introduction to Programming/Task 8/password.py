# Create a Python file called password.py in this folder.
# One of the most important patterns in computers and on the internet is
# your password. For a password to be classified as ”Strong” the password
# needs to be structured in a certain way. Password strength is
# determined by:

# The length of the password (at least 6 characters) (have_length)
# Needs to contain uppercase letters (up_case)
# Needs to contain lowercase letters (low_case)
# Needs to contain numbers (have_num)
#1. Declare boolean variables for each one of these characteristics.
# You will find the name of the variable next to the condition in the list
# above. Each variable must be initialised as False.

have_length = False
up_case = False
low_case = False
have_num = False
no_var_true = 0

#2 . Then ask the user a series of “yes or no” questions for each variable,
# change the boolean variable to True based on their answer.

#A)
# has_length = input("is the length of the password at least 6 characters ?")
# has_upp_case = input("Does the password contain uppercase letters ?")
# has_low_case = input("Does the password contain lowercase letters ?")
# hav_have_num = input("Does the password contain a number ?")


if input("is the length of the password at least 6 characters ?").lower() == "yes":
    have_length = True
    no_var_true += 1
else:
    have_length = False

# print("test have_length = | "+str(have_length))

if input("Does the password contain uppercase letters ?").lower() == "yes":
    up_case = True
    no_var_true += 1
else:
    up_case = False
# print("test up_case = | "+str(up_case))

if input("Does the password contain lowercase letters ?").lower() == "yes":
    low_case = True
    no_var_true += 1
else:
    low_case = False
# print("test low_case = | "+str(low_case))

if input("Does the password contain a number ?").lower() == "yes":
    have_num = True
    no_var_true += 1
else:
    have_num = False
# print("test have_num = | "+str(have_num))


#3. Once 3 of the characteristics are met (3 of the variables == True) then
# display a message saying this is a suitable password.
if no_var_true >=3 :
    print("this is a suitable password.")