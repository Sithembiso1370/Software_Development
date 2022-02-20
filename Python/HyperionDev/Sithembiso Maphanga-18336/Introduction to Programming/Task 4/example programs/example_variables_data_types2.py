
# This is an example program.
# The purpose of this program is to demonstrate the different operations of different variables.


num_one = 10
num_squared = num_one * num_one 


# You can use a variable to create new variables as seen above.


print(num_squared)

# While it's not great practice, it is possible to add strings together. This will be discussed in more detail in Task 5. 

first_name = "Tim"
second_name = "Adams"
full_name = first_name + second_name


# But don't forget a space between the two names, otherwise full_name just stores "TimAdams".
# Adding a space in-between the names:


full_name = first_name + " " + second_name 

print(full_name)

# A better way to doo this is to use the .format() function. Note the space between the curly braces -- see what happens if you take it out. 

full_name = "{} {}".format(first_name,second_name)

print(full_name)


NUM = 10
num_divide = 10/3


print(num_divide)

