# Create a new file called optional_task.py.

# Write Python code to take the name of a user's favourite restaurant and
# store it in a variable called fav_rest.
fav_rest = input("Enter favourite restaurant")
# Now, below this, write a statement to take in the user's favourite number.
# Use casting to store it in an integer variable called int_fav.
int_fav = int(input("Enter favourite number."))

# Now print out both of these using two separate print statements below
# what you have written. Be careful!
print(fav_rest)
print(str(int_fav))

# Once this is working, try cast fav_rest to an integer. What happens? Add a
# comment in your code to explain why this is.
# print(int(fav_rest))

# COMMENT:
# The error is raised when we try to convert a string value that is not formatted as an integer to an integer variable.
