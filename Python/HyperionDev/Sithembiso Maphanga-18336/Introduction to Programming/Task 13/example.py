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


# ============= while Loops ==================
# A loop is a sequence of statements that are continually repeated until a certain condition is met.

# In Python, the general syntax for a while loop is as follows:
# while condition_is_true:
#     execute_these_statements


# ************ Example 1 ************
print("Example 1: ")

i = 9

while i < 10:
   i = i + 1
# The above loop will only execute once because the condition while i < 10 is not true after you have added 1 to i.


# ************ Example 2 ************
print("Example 2: ")

i = 0

while i < 100:
     print(i)
     i = i+1
# The above loop will print out all the numbers from 0 to 99, and then terminate.

# ************ Example 3 ************
print("Example 3: ")

i = 100

while i < 50:
     print(i)

# The above while loop will not execute at all, because i is already bigger than 50.


# ************ Example 4 ************
print("Example 4: ")

a=0

while a < 10:
     print(a)
     a += 1       # a += 1 is equivalent to a = a + 1


# Initially a is set to 0.
# The while loop then checks the condition (a < 10) to see if it is true.
# If it is true the indented statements following the while loop are executed
# So if a is less than 10, the value of a is printed and then increased by one.
# The loop then begins again by checking the the condition and determining whether to execute the indented statements.
# This goes on until the condition becomes False.


# ************ Example 5 ************
# The following example, shows a program whose while statement sums successive even integers (2 + 4 + 6 + 8 + ...), until the total is greater than 250.
# An update statement increments i by 2
# so that it becomes the next even integer.

print("Example 5: ")

sum1 = 0
i=0                  #initial even integer for the sum
while sum1 <= 250:
     sum1 += i
     i += 2
     print(sum1)
# ****************** END OF EXAMPLE CODE ********************* # 
print("Example 6: ")


ia  = 29 ;
while ia  <= 90:
     print(f"ia = {ia}")
     print(f"ia + ia = {ia + ia}")
     ia += ia

ii  = 29 ;
while ii  <= 90:
     print(f"ii = {ii}")
     print(f"ii + 1 = {ii + 1}")
     ii += 1


