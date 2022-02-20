# Create a Python file called my_function.py in this folder.

# Create your own function that prints all the days of the week.

def displayweekdays():
    weekdaylist = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]
    for wd in weekdaylist:
        print(wd)
displayweekdays()


# Create your own function that takes in a sentence and replaces every
# second word with the word “Hello”.
sent = "I love coding"


def replace2ndword(sentence):
    print(f"Old sentence : {sentence}")
    word2remove = sentence.split(" ")[1]
    sentence = sentence.replace(sentence[sentence.rindex(word2remove):sentence.rindex(word2remove)+len(word2remove)],"hello")
    print(f"New sentence : {sentence}")

replace2ndword(sent)



