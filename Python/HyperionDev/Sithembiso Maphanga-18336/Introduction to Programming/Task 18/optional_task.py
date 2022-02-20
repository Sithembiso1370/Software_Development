# Create a new Python file in this folder called optional_task.py.

# Create a new text file in this folder called input.txt. In the input.txt file
# enter some text, making sure it is at least a few lines long.

# Write a program that will count the number of characters, words and
# lines in the file.

# Write a program that will count the number of characters, words and
# lines in the file.

# Print out your results.



print("Name")

no_characters = 0
no_words =0
no_lines =0
no_vowels = 0

# Use the with method so that we automatically close the file
with open('input.txt', 'r+') as f:
        for line in f:
                no_lines += 1
                no_characters += len(line)
                no_words += len(line.split())
                no_vowels += line.count("a")
                no_vowels += line.count("e")
                no_vowels += line.count("i")
                no_vowels += line.count("o")
                no_vowels += line.count("u")
                # Birthdates += line.split()[-3] + " "+line.split()[-2]+ " "+line.split()[-1]+"\n"
                # print(line[0] + " " + line.split()[1])

        print("no_lines :", no_lines)
        print("no_words :", no_words)
        print("no_characters :" , no_characters)
        print("no_vowels :", no_vowels)

