#************* HELP *****************
#REMEMBER THAT IF YOU NEED SUPPORT ON ANY ASPECT OF YOUR COURSE SIMPLY LEAVE A
#COMMENT FOR YOUR MENTOR, SCHEDULE A CALL OR GET SUPPORT OVER EMAIL.
#************************************

# ================= Consolidation Task ==================
# Everything you have been learning has been tested with application tasks for each section.
# Now however, you will now be utilising everything you have learnt so far to solve this problem.
# You've covered all the necessary content to solve a large real-life data problem.
# Data management is an extremely important component of the Computer Science field and this task will provide you with first-hand experience.
# You may find it helpful to revise what you've learnt from your previous tasks.
# This task will also require you to do some individual research as this is an essential component to being a successful software developer.
# You now have all the tools for the compulsory task.


# ================= File Input and Output ==================

# ************ Example 1 ************
# Write a file
out_file = open("test.txt","w")
out_file.write("This Text is going to out file\nLook at it and see!")
out_file.close()

# ************ Example 2 ************
# Read a file
print("\nExample 2:")
in_file = open("test.txt","r")
text = in_file.read()
in_file.close()
print(text)


# ================= The split() Method ==================


# ************ Example 3 ************
print("\nExample 3:")

print("This is a bunch of words".split())
# prints out ['This', 'is',  'a',   'bunch', 'of', 'words']

text = "First batch, second batch, third, fourth"
print(text.split(","))
# prints out ['First batch', ' second batch', ' third', ' fourth']


# ************ Example 4 ************
print("\nExample 4:")

text = "First batch, second batch, third, fourth"
list = text.split(",")
print(len(list))
# prints out 4

print(list[-1])
# prints out 'fourth'

list = text.split(",",2)
print(list)
print(len(list))
# prints out 3

print(list[-1])
# prints out 'third, fourth'



# ****************** END OF EXAMPLE CODE ********************* # 


