questions = [["What color is the daytime sky on a clear day? ", "blue"],
            ["What is the answer to life, the universe and everything? ", "42"],
            ["What is a three letter word for mouse trap? ", "cat"]]

if len(questions) == 0:
    print("No questions were given.")
index = 0
right = 0
while index < len(questions):
    question = questions[index][0]
    answer = questions[index][1]
    given_answer = input(question)
    if answer == given_answer:
        print("Correct")
        right = right + 1
        index = index + 1
    else:
        print("Incorrect, correct was:", answer)
        index = index + 1
print("You got", right * 100 / len(questions),\
       "% right out of", len(questions))


