# Create a new Python file in this folder called optional_task.py

# Write a program that will give you the meaning of a given abbreviation.

# Create a dictionary that contains some abbreviations and their meanings.
dictionary = {
    "OOP" : "Object Oriented Programming",
    "BMW" : "Bavarian Motor Works",
    "SMS" : "Short Message Service",
    "SARS" : "South African Revenue Services",
    "LOL" : "Laughing Out Loud"
}

# After you have created your dictionary, add 2 more abbreviations and their
# meanings to it.
dictionary["NPA"] = "National Policing Authority"
dictionary["USB"] = "Universal Serial Bus"


# Now ask the user to enter an abbreviation and check if that abbreviation is
# in your dictionary.
User_abr = input("Enter a abbriviation :")

# check if that abbreviation is in your dictionary.
if dictionary.__contains__(User_abr):
    # If it is, print out the abbreviation and its meaning.
    print(f"{User_abr} : {dictionary[User_abr]}")
# If it is not in the dictionary, print out "Abbreviation not found"
else:
    print("Abbreviation not found")


