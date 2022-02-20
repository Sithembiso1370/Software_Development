#************* HELP *****************
#REMEMBER THAT IF YOU NEED SUPPORT ON ANY ASPECT OF YOUR COURSE SIMPLY LOG IN TO www.hyperiondev.com/support TO: 
#START A CHAT WITH YOUR MENTOR, SCHEDULE A CALL OR GET SUPPORT OVER EMAIL.
#************************************


# PLEASE ENSURE YOU OPEN THIS FILE IN IDLE otherwise you will not be able to read it.

# *** NOTE ON COMMENTS ***
# This is a comment in Python. 
# Comments can be placed anywhere in Python code and the computer ignores them -- they are intended to be read by humans. 
# Any line with a # in front of it is a comment.
# Please read all the comments in this example file and all others.


# ========= if-else Statements =========
# An if statement together with an else statement is known as an if-else statement 
# The else statement represents an alternative path for the flow of logic if the condition of the if statement turns out to be False.
# If the if condition turns out to be True, the statements in the indented block following the if statement are executed. 
# If the if condition turns out to be False, the statements in the indented block following the if statement are skipped,
# and the statements in the indented block following the else statement are executed.

# In Python, the general if-else syntax is:
# if condition :
#	indented Statements
# else:
#	indented Statements

# ************ Example 1 ************
print("Example 1: ")
grade = 66

if grade >= 80:
        print("Congratulations you have an A")
else:
        print("You do not have an A")

# Explanation:
# If the grade is greater or equal to 80, the print statement in the indented block after the if statement is executed and "Congratulations you have an A” is printed 
# If the grade is not greater or equal to 80, the print statement in the indented block after the else statement is executed and "You do not have an A" is printed 


# ************ Example 2 ************
# Variables have different types and depending on what sort of operation you wish to do on them you may need to change their type.
# The example below shows that a String value does not equal an Integer, even if they appear to be the same  
print("Example 2: ")
if 9 == "9":                             #Comparing an integer and a string
        print("Types don't matter")
else:
        print("Types matter")


# ************ Example 3 ************
# You can only compare data types with each other if they are the same.
# To do this you need to change the type by casting.
# This is often used when the user is giving input as it is usually stored as a string.

print("Example 3: ")
if 9 == int("9"):
        print("Successful casting")
else:
        print("I didn't need to cast that!")



# ****************** END OF EXAMPLE CODE ********************* # 

