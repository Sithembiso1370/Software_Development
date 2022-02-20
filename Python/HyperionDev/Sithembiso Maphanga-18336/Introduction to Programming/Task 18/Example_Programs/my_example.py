# Files are an important source of information in Python. Before moving on, we want
# to make sure you know how to read the most simple type of files, text files (.txt),
# using Python.
# Python includes a built-in file type. This is a bit like a string data structure, but
# much more complex.
# There are two methods of opening a file in Python. Firstly, the line below creates a
# file object named f that is linked to the example.txt file in this folder. You'll learn
# about objects in a later task.

f = open('example.txt', 'r+')

# The second example below opens the file using a with/as block. This is the more
# ‘pythonic’ way of opening a file, and is quite handy because the file automatically
# closes again once the program reaches the end of that block of code.

# with open('input.txt', 'r+') as f:
# work with open file

# READING FILES IN PYTHON
# There are two common ways of reading files in Python:
# 1. The most common way to read from a file is to loop over the lines of the
# file. We can directly loop over the variable f, which is stored in Python as a
# list of lines — each line is one line of the file.
print("===============Method 1========================")
contents = ""
contents = ""
for line in f:
    contents = contents + line
print(contents)
f.close() # Always close files when done with them.

# Always close files when done with them by using f.close() to free up the
# resources it was using. Notice this is a function that takes zero arguments.

print("===============Method 2========================")
contents = ""
with open('example.txt', 'r+') as f:
    for line in f:
        contents += line
    print(contents)