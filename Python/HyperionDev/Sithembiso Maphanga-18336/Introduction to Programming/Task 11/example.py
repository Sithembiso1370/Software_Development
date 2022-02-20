#************* HELP *****************
#REMEMBER THAT IF YOU NEED SUPPORT ON ANY ASPECT OF YOUR COURSE SIMPLY LOG IN TO www.hyperiondev.com/support TO: 
#START A CHAT WITH YOUR MENTOR, SCHEDULE A CALL OR GET SUPPORT OVER EMAIL.
#************************************* 

# *** NOTE ON COMMENTS ***
# This is a comment in Python. 
# Comments can be placed anywhere in Python code and the computer ignores them -- they are intended to be read by humans. 
# Any line with a # in front of it is a comment.
# Please read all the comments in this example file and all others.


# ************ Example 1 ************
# Comparing Numbers

print("Example 1: ")

num1 = 10
num2 = 20

if num1 >= num2:        # 'greater than or equal to' 
       print("It's not possible that 10 is bigger than or equal to 20.")
elif num1 <= num2:      # 'less than or equal to'
       print("10 is less than or equal to 20." )
elif num1 != num2:      # 'not equal to'
       print("This is also true since 10 isn't equal to 20, but the elif statement before comes first and is true so Python will execute that!")
elif num1==num2 :       # 'equal'
       print("Will never execute this print statement...")


# Explanation:
# The program will check the first part of the if statement (is num 1 bigger than or equal to num 2?).
# If it is not, then it goes into the first 'elif' statement and checks if num1 is less than or equal to num2.
# If it is not then it goes into the next 'elif' statement...etc.


# ************ Example 2 ************
# Comparing Strings

print("Example 2: ")
my_name = "Tom"

if my_name == "Tom":
       print("Hey Tom!")


# ========= Logical Operators  ===========

# ************ Example 3 ************
# Example of an 'and' condition:

print("Example 3: ")
my_name = "Tom"
my_favourite_colour = "orange"

if my_name == "Tom" and my_favourite_colour == "orange": 
        print("Your name is Tom and your favourite colour is orange.")
else:
        print("Your name isn't Tom or your favourite colour isn't orange.")


# Explanation:
# If my_name
# is Tom and my_favourite_colour is orange, then the if statement's print statement will execute.
# Both conditions need to be met otherwise the else statement and its' print statement will execute.


# ************ Example 4 ************
#Example of an 'or' condition:       

print("Example 4: ")
item = "chair"

if item == "dog" or len(item) == 5:
       print("Either item is a dog, or the length of your item is 5.")

# Explanation:
# If item is dog or the length of item is 5, the print statement will execute
# At least one of the conditions need to be met otherwise print statement will not execute.


# ************ Example 5 ************
#Example of a 'not' condition:

print("Example 5: ")
has_traffic_fines = False

if not has_traffic_fines:
    print("You are a good driver.")

# Explanation:
# If has_traffic_fines is false the print statement will execute
# By adding the not operator, the has_traffic_fines variable is interpreted as being true when it is actually false 



# ************ Example 6 ************
print("Example 6: ")

if item == "dog" or len(item) == 5:                 #Branch 1
        print("Either item is a dog, or the len of your item is 5.")
elif item =="chair" and len(item) == 5:             #Branch 2
       print("Your item is both a chair and len of item is 5.")
        
# When you run the above code, what will be the output? Run this program and find out!
# Remember only one branch of the if statement will execute, even if multiple branch conditions are 'true'.


# ****************** END OF EXAMPLE CODE ********************* # 


