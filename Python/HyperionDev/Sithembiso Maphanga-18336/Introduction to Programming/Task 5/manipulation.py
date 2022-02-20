# Create a new Python file in this folder called manipulation.py.
# Ask the user to enter a sentence. Save the user’s response in a variable
# called str_manip.
str_manip = input("Enter a sentence")

# Using this string value, write the code to do the following:
# Calculate and display the length of str_manip.
print(len(str_manip))

# Find the last letter in str_manip. Replace every occurence of this
# letter in str_manip with ‘@’. E.g. if str_manip = “This is a bunch of
# words”, the output would be “Thi@ i@ a bunch of word@”
# because print(str_manip[-1]) = last letter
print(str_manip.replace(str_manip[-1],"@"))

# Print the last 3 characters in str_manip backwards. E.g. if str_manip
# = “This is a bunch of words”, the output would be “sdr”.
print((str_manip[-3:])[::-1])


# Create a five-letter word that is made up of the first three characters
# and the last two characters in str_manip. E.g. if str_manip = “This is a
# bunch of words”, the output would be “Thids”.
# print(f"str_manip[0:3] = {str_manip[0:3]}")
# print(f"str_manip[len(str_manip)-2:] = {str_manip[len(str_manip)-2:]}")
# therefore f" {str_manip[0:3]}{str_manip[len(str_manip)-2:]}"
print(f"{str_manip[0:3]}{str_manip[len(str_manip)-2:]}")

# Display each word on a new line. (Hint: Here we are defining a word
# as being separated by spaces.)
# https://www.jquery-az.com/5-examples-python-string-find-search-string-contains-word/
# print(str_manip.count(" ")) = no of spaces in the strings which = num of strings in split +1
# print(str_manip.count(" "))
# print(str_manip.split()[0])
# print(str_manip.split()[1])
# print(str_manip.split()[2])
# print(len(str_manip.split())
# therefore
str_len = len(str_manip)
i = 0
for str_manip.split()[i] in str_manip.split():
    if i < str_len:
        print(str_manip.split()[i])
        i += 1
