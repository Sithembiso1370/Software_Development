# Create a new Python file in this folder called optional_task.py.

# Create a program that determines whether a string is a palindrome.

# A palindrome is a string which reads the same backwards as forward.
# Some examples of palindromes are: racecar, dad, level and noon.

# Ask the user to enter a word and check if that word is a palindrome. If it is
# a palindrome, print out “Your word is a palindrome”. If it is not a
# palindrome, print out “Your word is not a palindrome”.

my_string = input("enter a string : ")

for letter in range(0, len(my_string)):
    if my_string[letter] == my_string[-letter-1]:
        answer = ("Your word is a palindrome")
    else:
        answer ="Your word is not a palindrome"
print(answer)

