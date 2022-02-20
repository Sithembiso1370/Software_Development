# Create a new Python file in this folder called jokes.py
import random


# Create a list of jokes.
jokes = [
    "Why did the scarecrow win an award? Because he was outstanding in his field.",
    "Why did the melon jump into the lake? It wanted to be a water-melon.",
    "Why were the teacher’s eyes crossed? She couldn’t control her pupils.",
    "What lights up a soccer stadium? A soccer match.",
    "Why did the tomato turn red?  It saw the salad dressing.",
    "Why did Adele cross the road?  To sing, “Hello from the other side!"
]

rand_no = random.randint(0,len(jokes)-1)


# Use the random module to display a random joke each time the code runs.
print(jokes[rand_no])
