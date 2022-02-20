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


# ========= Reading Python code ========= 
# You're actually reading a Python program right now.
# Comments in Python appear in GREEN if you have the file opened in Notepad++ and RED if you have it opened in IDLE.
# Keywords of the Python language appear in BLUE in Notepad++ and PURPLE in IDLE. 
# Most other programming languages have the same structure as Python, so if you learn Python, you can learn the others more easily! It's not like learning human languages.


#  =========  The print() function ========= 
# You may want your program to display or output information to the user.
# The most common way to view program output is to use the print function.
# To use print, we enter the print command followed by one or more arguments. 

# ************ Example 1 ************
print("Hello, World!")
# When you run this program the computer will output the argument Hello, World!
# Note that the argument is enclosed in double quotes ("..."), which are not displayed in the output.
# This is because "Hello, World!" is a string or list of characters.

# ************ Example 2 ************
print("Printing a string.") 

# A common SYNTAX error you could make above is by forgetting to add a closing ".
# Remember that all opening quotation marks (") require a closing one!


# ========= How to get input ========= 
# Sometimes you want a user to enter something through the keyboard.
# The following input command will show the text "Enter your name: " in the output box of the program and the program will halt
# until the user enters something with their keyboard and presses ENTER.

# ************ Example 3 ************
# The following input commands will get the user's name and age. 

name = input("Enter your name: ") 
age = input("Enter your age: ")

# The variable 'name' stores what the user entered into the box as a string.
# The variable 'age' also stores what the user entered into the box as a string.
# Now, when you try running this file, notice the output produced by the following command.
print(name, age)
print("{} is {} years old!".format(name,age))

# A common SYNTAX error you could make above is by forgetting to add a closing ‘)’.
# Remember that all opening brackets ‘(’ , require a matching closing one!


#  ========= Running Python files ========= 
# Now that you know how to write code, it's time to learn how to execute your code to see what the output is.
# Let's 'RUN' this Python file and take a look at what output it produces (if any).
# When you write Python code, you'll have to run it often to test that your programs are doing what you'd like them to do.

# There are different ways to 'run' Python files.

#  ========= OPTION 1: Run from IDLE Python GUI -- THE EASY WAY ========= 
# The easiest way to run Python files and this program is through a GUI (Graphical User Interface). 
# Press F5 on your keyboard to RUN the Python file and the output will appear in a separate Python output (Python Shell) window!
# You can use this method to run ANY Python file (file with a .py extension). 
# If there is an error in your code, the code won't run and the error will be printed out in the Python Shell window.

# Errors are things like trying to add two variables that aren't the same data type, or using a variable that isn't declared! 
# (i.e. if you say num = num1+num2 and you haven't said what num1 and num2 are above this statement!)
# We'll talk about errors more later.

# Play around with this program. Change statements and delete things, run the code and see what happens.

# We advise that you complete all tasks and open all example files in IDLE from now on.
# Perhaps create a shortcut to IDLE on your desktop so that you can access it faster.
# You can also use Notepad++ to view the example.py files, but Notepad++ can only be used to view the text of a code. You can't run programs from within Notepad++.


#  ========= OPTION 2: Use any GUI/IDE that you want.  -- ADVANCED ========= 
# An IDE is a program like the IDLE Python GUI.
# You get many programs that let you run code within them.
# Some of these IDEs are more complicated than others.
# See http://wiki.python.org/moin/PythonEditors for a huge list of your options of different IDEs that you can run Python files from.
# As long as you know how to use IDLE, you can complete our entire course.


# ****************** END OF EXAMPLE CODE ********************* # 


