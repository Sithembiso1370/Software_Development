#************* HELP *****************
#REMEMBER THAT IF YOU NEED SUPPORT ON ANY ASPECT OF YOUR COURSE SIMPLY LEAVE A
#COMMENT FOR YOUR MENTOR, SCHEDULE A CALL OR GET SUPPORT OVER EMAIL.
#************************************

# ========= Recap on Strings ===========
# A string is a common data type which is used to represent text.
# It is a sequence of characters, such as letters, numerals, symbols and special characters.
# You have probably already noticed what an important part strings play in programming.
# Many programs you come across will involve the manipulation of strings.
# Therefore, knowing string manipulation techniques or string handling is crucial.
# We have already touched on this subject in the previous strings task, so this will just serve as a brief recap
# and will introduce you to more advanced programs.


# ************ Example 1 ************
# Recap on slicing strings 
print("Example 1: ")

string = 'Hello world!'
fizz = string[0:5]
print(fizz)

# Note that slicing a string does not modify the original string.
# You can simply store the substring 'sliced' from the original string in a separate variable.
# By storing the substring in another variable, you keep the original string intact.


# ************ Example 2 ************
print("Example 2: ")

fact1 = "The original name of windows was Interface Manager."
fact1 = fact1.upper()
print(fact1)
fact1 = fact1.lower()
print(fact1)

# ************ Example 3 ************
print("Example 3: ")

sentence = "ThisHELLOisHELLOrandomHELLOtextHELLOweHELLOareHELLOgoingHELLOtoHELLOsplitHELLOapart"
split_sentence = sentence.split("HELLO")
print(split_sentence)

# Notice how a list is printed out?

# ************ Example 4 ************
print("Example 4: ")

fact2 = "          The$first$electronic$computer$ENIAC$weighed$more$than$27$tons.          "
fact2 = fact2.replace("$", "WOW!")
print(fact2)
fact2 = fact2.strip()
print(fact2)
fact2 = fact2.split("WOW!")
print(fact2)

# ************ Example 5 ************
print("Example 5: ")
string_list = ["I", "like", "to", "join", "lists", "to", "make", "strings"]
list_joined = " ".join(string_list)
print(list_joined)

# ========= Escape Character ===========
# Python uses the backslash (\) as an escape character.
# The backslash (\) is used as a marker character to tell the compiler/interpreter that the next character has some special meaning.
# The backslash together with certain other characters are know as escape sequences.

# ************ Example 6 ************
print("Example 6: ")
people = "Person 1 \nPerson 2"
print(people)
# Notice the line break between the two words. The \n character is invisible -- it's a command to insert a new line.


# ************ Example 7 ************
print("Example 7: ")
wage = "Person 1: \t R123.22"
print(wage) 
# Notice the tab between the two words. The \t character is invisible -- it's a command to insert a new tab space. 

# ************ Example 8 ************
print("Example 8: ")
sentence = "\"The escape character (\\) is a character which invokes an alternative interpretation on subsequent characters in a character sequence.\"" 
print(sentence)
# Notice that the quotation marks and backslash are printed out as part of the string.



# ****************** END OF EXAMPLE CODE ********************* # 

