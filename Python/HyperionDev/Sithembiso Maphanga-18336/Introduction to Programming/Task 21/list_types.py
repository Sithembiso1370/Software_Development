# Create a new Python file in this folder called list_types.py.

# Imagine you want to store the names of three of your friends in a list of
# strings. Create a list variable called friends_names, and write the syntax to
# store the full names of three of your friends.
import random

friends_names = []


friends_names.append("Nosipho Maphanga")
friends_names.append("Sihle Coka")
friends_names.append("Thapelo Jele")

# Now, write statements to print out :
# print("list = "+str(friends_names))
# the name of the first friend
print(friends_names[0])
# the name of the last friend
print(friends_names[-1])
# the length of the list.
print(len(friends_names))

# Now, define a list called friends_ages that stores the age of each of your
# friends in a corresponding manner, i.e., the first entry of this list is the age
# of the friend named first in the other list.
friends_ages = []

for  i in range(len(friends_names)):
    rand_age = random.randint(25,40)
    friends_ages.append(rand_age)

# print(str(friends_ages))
