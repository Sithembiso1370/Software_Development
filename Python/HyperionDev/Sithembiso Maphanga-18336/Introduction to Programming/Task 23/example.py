#************* HELP *****************
#REMEMBER THAT IF YOU NEED SUPPORT ON ANY ASPECT OF YOUR COURSE SIMPLY LEAVE A
#COMMENT FOR YOUR MENTOR, SCHEDULE A CALL OR GET SUPPORT OVER EMAIL.
#************************************


# ========= Functions in Python ===========
# A function is a reusable and organised block of code that is used to perform a single action or specific task.

# =========== Importing Outside Modules ===========
# We mentioned earlier that there are thousands of already written functions, but how do you get access to them?
# MODULES are the answer. Modules, or libraries, are pieces of code already written by other programmers that you can 'import' into your program.
# You import these modules using the 'import' keyword followed by the module's name.


# ************ Example 1 ************
# Say you want to find the square root of a number. It would be tedious to try write code to implement that (and a bit hard if you think about it!).
# Let's just use the 'sqrt' function already implemented by some programmer years ago in the math library.
 
print("\nExample 1: ")
import math
# Imports the math module.
# You do not need to install the math module, it comes with Python but must be specifically imported into a program that uses it.

number = 25
print("The square root of 25 is : " + str(math.sqrt(25))+".")   # We are using the sqrt function of the math module.

# Explanation:
# math.sqrt returns a FLOAT which is just an int that has decimal places (for example, 1.5). 
# That makes sense, given that the square root of numbers isn't always a simple integer.
# The square root of 100 may be 10, but the square root of 3 has many decimal digits. 
# We must thus convert the result of math.sqrt(25) to a string before we will be able to print it out, since the print function only works on Strings.
# This explains why we have str(____) around the call to the function.
# The result of the sqrt function is being cast from float to string and printed out.


# ************ Example 2 ************
# If you want to square a number, the math module has a function: 'pow', that takes two numbers as input
# The first is the number you want to raise to a power, and the second is the power you what to raise a number to.
# Squaring a number is the same as raising that number to the power of 2.

print("\nExample 2: ")
square = math.pow(5,2)
# The pow function will take the first argument (5) and put the second argument (2) as an exponent for the first number.
# So we get 5^2 which is 25.

print("5 squared is equal to: " + str(square)+".")


# ************ Example 3 ************
print("\nExample 3: ")
import math            # This line imports the math module.
everything = dir(math) 
print(everything)

# The above code imports all content from the math module which we then simply print/list on the console to view.
# This is extremely useful when you need to import contents from modules or even other programs you've created -- but we'll take a look 
# at that later.
# dir() is another one of the many built-in functions Python has.
# This function returns all the names or attributes for the specified input parameter (here the math module). 


# =========== Some Other Useful Built-In Functions ===========
# It may be useful to know about some more built-in functions that can do work for you. 
# Examples of these can be found below.
# ************ Example 4 ************
print("\nExample 4: ")

maximum = max(1,5,7,3,6)
print(maximum)

minimum = min(1,4,7,1)
print(minimum)


absolute = abs(-42)
print(absolute)
# When you run this code, you'll notice how the functions automatically do the mathematical operation for you.
# ****************** END OF EXAMPLE CODE ********************* # 

