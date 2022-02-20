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


       
# ============= for Loops ==================
# Programmers don't want to have to copy and paste the same statement over and over again.
# Just like a while loop, a for loop allows statements to be repeated a number of times

# ************ Example 1 ************
print("Example 1: ")
for i in range(1, 10):
        print(i)

# Explanation:
# This for loop prints the numbers 1 to 9. Again, note the indentation and the colon, just like in the if statement.
# In this for loop, when the variable i (which is an integer) is in the range of 1 to 10 (i.e. either 1, 2, 3 ,4 ,5 ,6 ... or 9), the code under the for loop will execute.
# range(1, 10) specifies that i = 1 in the first iteration of the loop.
# Through each iteration of the loop i will be increased by 1 until i is 10 and therefore not in the range (1,10).
# The loop will then stop executing.

        

# ************ Example 2 ************
# You can use an if statement within a for loop!
print("Example 2: ")
for i in range (1,10):
        if i > 5:
                print(i)
                
# This will only print the numbers 6, 7, 8 and 9 because numbers less than or equal to 5 are filtered out.

# ================ Nested Loops ==================

# ************ Example 3 ************
# This example prints out the first 5 multiples of numbers 1 to 5

print("Example 3: ")

for x in range(1, 6):
    for y in range(1, 6):
        print('{} * {} = {}'.format(x, y, x*y))
    print("")

# Run this program to see the output

# ============= Nested if Statements ==================
# You can also nest if statements either within another if statement or within a loop

# ************ Example 4 ************
# Nested if statements
print("Example 4: ")
name = "B"
if name == "A":
        if name =="B":
                print("It isn't possible for this code to execute, how can the variable name be two things at once?")
else:
        print("Your name isn't A but I can't automatically assume from that that it is B.")
        
# Think about this one logically! Note the indentation carefully. You have an if within an if and then an else.

# ****************** END OF EXAMPLE CODE ********************* # 

