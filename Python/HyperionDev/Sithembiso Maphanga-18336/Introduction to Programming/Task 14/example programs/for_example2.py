# This is an example Python program demonstrating for loops.
# It asks for the user to given_number a number.
# If the number is even, a for loop prints out an increasing * pattern.
# If the number is odd, a for loop prints out a decreasing * pattern.

given_number = int(given_number("Enter a number: \n"))


if given_number % 2==0: # If number is even. 
        stars = "*"
        for i in range(0 ,10):
                stars = stars +"*"
                print(stars)
                
elif (given_number % 2 != 0): # If number is odd, i.e. the number divided by 2 does NOT have a remainder of 0.
        stars = "**********"
        for i in range(0 ,10):
                index = 10-i  # i goes from 0 to 10 in this loop
                print(stars[0:index]) # Index gets SMALLER as the loop goes on i.e. from [0:10] to [0:1] i.e. fewer of the 10 original stars will be printed out.
                
# Remember you can cut off pieces of a String using string[start index: end index]. 
# This is known as String Slicing and gives you a Substring(part of the original String).
# Strings are indexed starting from 0, i.e. for the String "python", 'p' will be at index 0, 'y' at index 1 etc. 
# Strings can also be indexed from negative positions as seen below. 
# letter: p   y   t   h   o   n
# index:  0   1   2   3   4   5
#        -6  -5  -4  -3  -2  -1
# "python"[0:2] will give the result "py", so the end index is NOT included and the start index IS included. 
# "python"[1] will give the result 'y'. So will "python"[-5].
# You can also slice the String omitting either the start or end index, i.e. "python"[:2] + "python"[2:] gives the result "python".
                
                




	



