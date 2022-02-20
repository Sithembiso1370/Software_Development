# Write a program called seperation.py that inputs a sentence and then
# displays each word of the sentence on a separate line.


my_str = input("Enter a sentence to display each word on a new line:")

# print(my_str)
for name in my_str.split():
    print(name)
