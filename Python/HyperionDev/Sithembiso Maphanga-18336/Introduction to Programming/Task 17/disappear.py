# Write a Python program called disappear.py that strips a set of characters
# from a string.

# Ask the user to input a string and then ask the user which characters they
# would like to make disappear.

# For example:
# ○ The quick brown fox jumps over the lazy dog.
# ○ After stripping a,e,i,o,u
# ○ Th qck brwn fx jmps vr th lzy dg.

my_str = input("Enter a string to  strips a set of characters from:")

my_chars = input("Enter characters to remove :")

my_str2 = ""

for mychar in my_chars:
    if mychar in my_str:
        # print(my_str2.replace(mychar,''))
        my_str = my_str.replace(mychar,"")
    else:
        print(f" character {mychar} not in this string")
print(my_str)

