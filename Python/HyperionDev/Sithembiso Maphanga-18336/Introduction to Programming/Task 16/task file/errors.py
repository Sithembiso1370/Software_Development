# This example program is meant to demonstrate errors.
 
# There are some errors in this program, try run the program by pressing F5.
# Now look at the error messages and find and fix the errors.

# syntax error added brackets
print("Welcome to the error program")
# syntax error added brackets and removed indentation
print("\n")

# removed indentation and causing a syntax error
# removed all the other extra text to fix the logical error of adding this text already available in the print section
ageStr = '24'

age = int(ageStr)
# formatted age to remove the logical error caused by adding an integer to strings
print("I'm "+format(age)+"years old.")
three = "3"

# formating the variable three to an integer with int() to fix the logical error of adding a string to an integer
answerYears = age + int(three)

# added paranthesis to fix the syntax error caused by not having paranthesis for the parameter of the print function
# syntax error : removed quotations making the answerYears variable a string rather than a variable holder
# logical error : converted the answerYears integer variable to string so it can be added to the text within the print
print("The total number of years:" + str(answerYears))

# syntax error : fixed the variable answere below to the correct variable name answerYears instead of string "answeryears"
answerMonths = answerYears*12

# syntax error : added paranthesis
# logic error : converted the varaiable answerMonths to a string so it can be added with the rest of the parameters of the print
print("In 3 years and 6 months, I'll be " + str(answerMonths) + " months old")

#HINT, 330 months is the correct answer

