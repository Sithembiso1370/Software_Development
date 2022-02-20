# Create a program called names.py to do the following:

# Require the user to enter the names of all pupils in a class. The user
# should be able to type “Stop” to indicate that the names of all the
# students have been entered.
names = []
count = 0
while True:
    name = input("Enter a name : ")

    if name.lower() == "stop":
        # print(f"name entered = {names}")
        break
    else:
        count += 1
        names.append(name)
        # print(f"name entered = {names}")

# Print out the total number of names the users entered after the
# loop has been exited.
print(f"number of names entered = {count}")
