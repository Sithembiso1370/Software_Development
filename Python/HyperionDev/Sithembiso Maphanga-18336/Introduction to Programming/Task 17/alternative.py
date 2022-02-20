# Create a program called alternative.py that reads in a string and makes
# each alternate character an uppercase character and each other alternate
# character a lowercase character.

# For example, the string “Hello World” would become “HeLlO WoRlD”

my_old_str = input("Enter a string to Alernate letter case :")

my_new_str = ""

for i in range(0,len(my_old_str)):
    # print(i)
    # print(my_old_str[i])
    if i%2 == 0:
        # print(f"EVEN i = {i}")
        my_new_str += my_old_str[i].upper()
    else:
        # print(f"ODD i = {i}")
        my_new_str += my_old_str[i].lower()
print(f"{my_old_str} | case alternated is : |  {my_new_str}")