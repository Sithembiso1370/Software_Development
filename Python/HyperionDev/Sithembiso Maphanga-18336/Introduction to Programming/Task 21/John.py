# Write a Python program called John.py that takes in a user’s input as a string

user_inp = input("Enter your name :")

incorrect_entries = []
while user_inp != "John":
    incorrect_entries.append(user_inp)
    user_inp = input("Enter your name : ")

print("Incorrect names : "+str(incorrect_entries))


