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


# ************ Example 1 ************
# Some examples of strings

print("Example 1: ")

name = "John Doe"
fact = "A traffic jam lasted lasted for more than 10 days, with cars only moving 0.6 miles a day."
address = "77 Winchester Lane"
empty_str = ""

print(name)
print(fact)
print(address)
print(empty_str)


# ========= Indexing Strings ===========
# Since a string is basically a list of characters, you can extract the characters of a string.
# Each character of a string (including blanks) is indexed by numbers starting from 0 for first character on the left. 
# The characters are also indexed from right to left using negative numbers, where -1 is the rightmost index and so on.

# ************ Example 2 ************

print("Example 2: ")

word = "Hello"

# Indexing from 0 to 4
char1 = word[0]
char2 = word[1]
char3 = word[2]
char4 = word[3]
char5 = word[4]
print(char1)
print(char2)
print(char3)
print(char4)
print(char5)

# Indexing from -5 to -1
char1 = word[-1]
char2 = word[-2]
char3 = word[-3]
char4 = word[-4]
char5 = word[-5]
print(char1)
print(char2)
print(char3)
print(char4)
print(char5)

greeting = "Hello"
print(greeting[0] + greeting[1] + greeting[2] + greeting[3] + greeting[4])
# ========= Slicing Strings ===========
# Slicing in Python, extracts characters from a String based on a starting index and ending index
# It enables you to extract more than one character or "chunk" of characters from a string.


# ************ Example 3 ************

print("Example 3: ")

VERY_LONG_WORD = "supercalifragilisticexpialidocious"
print(VERY_LONG_WORD[0:5])         # prints out 'super',  

# ************ Example 4 ************

print("Example 4: ")

index = 6
print(VERY_LONG_WORD[index:9])     # prints out 'ali' - you can use variables as indices

# ************ Example 5 ************
# You can omit either or both of the indices
# If the first index is omitted it defaults to 0, so that your chunk starts from the beginning of the original string
# If the second index is omitted it defaults to the highest index in the string, so that your chunk ends at the end of the original string.

print("Example 5: ")

print(VERY_LONG_WORD[0:]) 
print(VERY_LONG_WORD[:])
# both these statements print out all the characters from the 0th position (the start of the string) to the end.

print(VERY_LONG_WORD[:9])       # prints out 'supercali'

 
# ==== Concatenating Strings ====
# You can add, or 'concatenate' Strings together to form a sentence or longer word.
# You can use the '+' operator to join strings together 


# ************ Example 6 ************

print("Example 6: ")

name = "Tim"
sentence = "My name is " + name

print(sentence)

# However, this is not considered good practice. This is used mostly in older languages


# ************ Example 7 ************
# You cannot add a string and a non string together, you must convert the non string if you want to do this.
# If you try run code that adds a string with a non-string, you will get an error. 
# You'll see many examples in our code where we have to cast things to a String in order to print them out.

print("Example 7: ")

age = 12
sentence = "And my age is " + str(age)  # Casting Integer to String.

print(sentence)

# Explanation:
# The way numbers are stored and arranged differ to the way Strings are stored. 
# In the example above, we are wanting to state that your age is 12. 
# The problem lies with the integer, how do we convert an integer to a String that can be easily joined in the String statement?
# We do this by converting the integer to a String using casting and then joining it to the desired text.


# ************ Example 8 ************
# A better way of concatenating strings is shown below:

print("Example 8: ")
sentence = "My name is {} and I'm {} years old.".format(name, age)
print(sentence)

# In the example above, a set of opening and closing curly braces ({})
# serve as a placeholder for variables. The variables that will be put into
# those placeholders are listed in the brackets after the keyword 'format'.
# The variables will fill in the placeholders in the order in which they are listed.
# Therefore, the code above will result in the following output:
# My name is Tim and I'm 16 years old.

# Notice that you don’t have to cast the variable that contains a
# number (age) to a string when you use the ‘format’ method.

# An even more efficient way of writing the above is with a f-string: 

sentence_f_string = "My name is {name} and I'm {age} years old."


# ************ Example 9 ************
print("Example 9: ")

sentence_two = "No people under the age of 18."
age = int(input("Enter your age: ")) 

# Explanation:
# In second line, we would like input of the user's age, so we make use of the function input(...) and call it with a string parameter.
# input(...) is a function and a function is a series of operations used to access, perform and/or set some actions to/with data if it is needed.
# The string "Enter your age" is read by the function input(...) which accesses the string given to it and prints it on the screen. 
# The next step input(...) takes is to read what the user types on the keyboard. This is given back to us as a string.
# Seeing that age is a something which could increase or decrease, we can say that it should be treated like a number.
# That is why we use the int(...) function to take the user's input, and return it as a number which is then stored as such in the age variable.


# ===== Defining multi-line Strings ==== 
# Sometimes, it's useful to have long Strings that can go over one line.
# We use triple single quotes to define a multi-line String
# Defining a multi-line String preserves the formatting of the String

# ************ Example 10 ************
print("Example 10: ")
LONG_STRING = ''' This is a long string
 using triple quotes preserves everything inside it as a string
 even on different lines and with different /n spacing. '''


# ========= The len() Function ===========
# A function is a group of statements that perform a specific task.
#  A useful function is the len("string") function which returns the length of the String


# ========= String Methods ===========
# String methods are built in code that perform certain operations on strings 
# There are many built in string methods that can provide useful functionality to your program without extra coding.
# You are able to reuse these methods over and over again.

# Some useful String methods are as follows:
#   - string.upper()                --->   converts lowercase letters to uppercase
#   - string.lower()                --->   converts uppercase letters to lowercase
#   - string.replace("old" , "new") --->   replaces all occurrences of substring old with the substring new
#   - string.strip('char')          --->   removes leading and trailing characters 'char'            



# ************ Example 11 ************
# Notice that the \n in the string below will cause the string to be printed on a
# new line.
print("\nExample 11: ")

manip_string = "***Welcome$to$the$world$of$programming***"

manip_string = manip_string.replace("$", " ")
print("manip_string.replace(""$"", " "): {}".format(manip_string))

manip_string = manip_string.strip('*')
print("manip_string.strip(""*""): {}".format(manip_string))

manip_string = manip_string.upper()
print(f"manip_string.upper(): {manip_string}")

manip_string = manip_string.lower()
print(f"manip_string.lower(): {manip_string}")

print(f"len(manip_string) {len(manip_string)}") 

# ************ Example 12 ************
# You can also specify how many spaces to have before a variable
# by using the method shown below:
print("\nExample 12: Use {:10} to put 10 spaces before the length of the string:")

print("len(manip_string)= {:10}".format((len(manip_string)))) 



# Remember that you can run this file to see output, or copy and paste sections of it into your own Python files and run them to understand the code better. 

# ****************** END OF EXAMPLE CODE ********************* # 
