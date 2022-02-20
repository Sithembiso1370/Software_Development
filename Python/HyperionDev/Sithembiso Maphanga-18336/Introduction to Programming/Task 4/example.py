#************* HELP *****************
#REMEMBER THAT IF YOU NEED SUPPORT ON ANY ASPECT OF YOUR COURSE SIMPLY LOG IN TO www.hyperiondev.com/support TO: 
#START A CHAT WITH YOUR MENTOR, SCHEDULE A CALL OR GET SUPPORT OVER EMAIL.
#************************************* 


# PLEASE ENSURE YOU OPEN THIS FILE IN IDLE otherwise you will not be able to read it.

# *** NOTE ON COMMENTS ***
# This is a comment in Python. 
# Comments can be placed anywhere in Python code and the computer ignores them -- they are intended to be read by humans. 
# Any line with a # in front of it is a comment.
# Please read all the comments in this example file and all others.


# ========= How to Declare Variables ===========
# When you declare a variable, you determine its name and data type
# In Python however you do not need to indicate the data type of the variable.
# This is because Python detects the variable's data type by reading how data is assigned to the variable.
# You use the assignment operator ‘=‘ to assign a value to a variable.

# ************ Example 1 ************
num = 2
# the variable num is assigned the integer or whole number 2, due to the presence of digits and lack of quotation marks

# ************ Example 2 ************
num2 = 12.34
# the variable num2 is assigned the float or decimal number 12.34, due to the presence of the decimal point and lack of quotation marks

# ************ Example 3 ************
greeting = "Hello, World!"
# the variable greeting is assigned the String Hello, World!, due to the presence of quotation marks ("...")

# ************ Example 4 ************
number_str = "10"
# Watch out! Since you defined 10 within quotation marks, Python knows this is a String. It's not an integer even though we understand 10 is a number.


# ========= Changing a Value Held by a Variable  ===========
# If you want to change a value held by a variable, simply assign it another value 

# ************ Example 5 ************
num3 = 4
num3 = 5
# this changes the integer value 4 held in num3 to 5

# ========= Casting ===========
# Casting basically means taking a variable of one particular data type and “turning it into” another data type
# To do this you need to use the following functions:
#   str() - converts variable to String
#   int() - converts variable to Integer
#   float() - converts variable to Float

# ************ Example 7 ************
# Using str() to convert an Integer to String

number = 10                     
number_str = str(number_str)
print("Example 7: ")
print(number_str)


# ************ Example 8 ************
# Using int() to convert a Float to Integer

number_float = 99.99
number_int = int(number_float)
print("Example 8: ")
print(number_int)

# run this example; notice that number_int does not contain a decimal?



# ****************** END OF EXAMPLE CODE ********************* # 



# ======================= Play around with Python a bit  ===========================================
# 
#         At this point, why not play around with creating variables? Press the windows Start button (in the bottom left corner of your screen), in the 'Search for programs and files' box, 
#         type 'Python (command line)' and you should see a program named exactly that pop up. Click to run the program.
#         In the black box that appears, type: 
#         
#         name = "John"  
# 
#         then press enter. Nothing happens but this Python program has remembered what you set the variable 'name' to.
#         To prove this type: 
# 
#         print(name)
# 
#         and then hit enter. 'John' should be printed out by the program. 
#         If you close this black box, and open a new one and type: print(name) , you will get an error. This is because you were coding in the Python 'Shell' and your variables aren't saved. 
#         We write Python code statements in text editors like Notepad++ or the IDLE Python GUI so that all our variable definitions and code are saved.
#         We can then run these files as Python programs at any time we want, and we can use these programs repeatedly.
#         Keep the black box open and try out some commands as you read through this file. Try to add some numbers and variables.
#          -> you are actually writing Python code already, it's that simple!
# 
# ==================================================================================================

