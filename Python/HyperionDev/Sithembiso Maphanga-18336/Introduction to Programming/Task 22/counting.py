# Write a Python program called counting.py to count the number of times
# a character occurs (character frequency) in a string.

sample_string = "Sithembiso Maphanga"
string_letters = []
all_alphabets = 'abcdefghijklmnopqrstuvwxyz'
occurrences = {}

for letter in sample_string.lower():
    # print(letter)
    if letter in string_letters:
        pass
        # print("letter already added")
    else:
        string_letters.append(letter)
        occurrences[letter] = 0

for i in occurrences:
    for x in  range(len(sample_string)):
        if i.lower() == sample_string[x].lower():
            occurrences[i] += 1

print(occurrences)