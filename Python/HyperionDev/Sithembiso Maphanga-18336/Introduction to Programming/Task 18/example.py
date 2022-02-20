#************* HELP *****************
#REMEMBER THAT IF YOU NEED SUPPORT ON ANY ASPECT OF YOUR COURSE SIMPLY LEAVE A
#COMMENT FOR YOUR MENTOR, SCHEDULE A CALL OR GET SUPPORT OVER EMAIL.
#************************************
 
 
# =========== Reading From Files in Python ===========
 
# ************ Example 1 ************
# Before you can read a file you need to open it.
# You open a file using Python's built in open() function which creates a file object.
# The line below creates a new file 'object' named f that is linked to the example.txt file in this folder.
 
f = open('example.txt', 'r+')
 
 
# This means f is open for reading.
# The first argument (example.txt) is the filename and the second argument is the mode.
# The mode determines the mode in which the file has to be opened.
 
# Here we intend to read and write from/to example.txt, which is already in the same folder as this file, example.py.
# Python will look in this directory for 'example.txt', and try read its context.
 
# The most common way to read from a file is simply to loop over the lines of the file:
# We can directly loop over the variable f, which is stored in Python as a list of lines.
# Each line is 1 line of the file. 
 
# ************ Example 2 ************
print("\nExample 2: ")
for line in f:
        print("The first character of this line is: " + line[0] + "\n")
        print("The entire line is: " + line)
        
f.close() 
# Always close files when done with them, using the close() function.
# This is in order to free up the resources that the file was using.
# Notice this is a function that takes in 0 input.
 
 
# ************ Example 3 ************
# We could build up all lines of the text file into a large string called contents as follows:
 
print("\nExample 3: ")
contents = ""
with open('example.txt', 'r+') as f: # Open the file again!
        for line in f:
                contents = contents + line
 
# You don't need to close the file here because it has reached the end of block
 
# We now have the contents of an external resource (a text file), stored inside our program in a variable called contents.
# That's pretty powerful! But for now, let's just print the contents to a screen:
 
print(contents)
 
# =========== Read Method ===========
# You can also use the read method in order to read from a file.
# The syntax for this method is as follows:
# file.read(n)   -   reads n number of characters from the file, or if n is blank reads the entire file
 
 
# ************ Example 4 ************
print("\nExample 4: ")
 
f = open('example.txt','r+', encoding='utf-8') # Open the file again!
#Notice in the code above how we pass an extra optional arugment through to the open function.
#This arguments specifies the encoding of the file. 
newContents = f.read()
print(newContents)
 
f.close() # Always close files when done with them.
 
 
# ****************** END OF EXAMPLE CODE ********************* # 
 
 
 
 
 
