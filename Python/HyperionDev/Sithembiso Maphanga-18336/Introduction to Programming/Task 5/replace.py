# 1. Create a new Python file in this folder called replace.
#2. Save the sentence: “The!quick!brown!fox!jumps!over!the!lazy!dog!.” as a single string.
sentence = "The!quick!brown!fox!jumps!over!the!lazy!dog!."

#3 Now reprint this sentence as “The quick brown fox jumps over the lazy
# dog.” using the replace() function to replace every “!” exclamation mark
# with a blank space.
print(sentence.replace("!"," "))

#4 Now reprint that sentence as “THE QUICK BROWN FOX JUMPS OVER THE
# LAZY DOG.” using the upper() function
print(sentence.replace("!"," ").upper())

#5 Print the sentence in reverse.
print(sentence[::-1])
# print(sentence.reverse())