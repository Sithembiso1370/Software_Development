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



# ========= elif Statements ===========
# elif is short for else if.
# It allows you to specify a new condition to test, if the first condition is False.

# ************ Example 1 ************
print ("Example 1: ")
grade = 66

if grade >= 80:
        print ("Congratulations! You have an A")
elif grade >= 70:
        print ("Good job! You have a B")
elif grade >= 60:
        print ("Keep it up! You have a C")
elif grade >= 50:
        print ("Try a little harder next time! You have a D")
else:
        print ("Oh No! You have an F")

# Run this program to see what prints out, then try changing the value of the grade variable and running it again.

# ************ Example 2 ************
print ("Example 2: ")

if len("Hello World") > 6:
        print("This sentence is long!")
elif len("Hello World") > 3:
        print("Slightly more manageable!")
else:
        print("Easy stuff")
        

# ****************** END OF EXAMPLE CODE ********************* # 

