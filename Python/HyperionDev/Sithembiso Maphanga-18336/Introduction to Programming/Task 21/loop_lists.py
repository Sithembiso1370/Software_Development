# Create a new file in this folder called loop_lists.py.

# Inside it, define a list of strings of your 5 favourite movies.

favourite_movies = ["Collateral Beauty","Mission Impossible","Tenet","Avengers","The Matrix"]

for i in range(len(favourite_movies)):
    print(f"Movie {i+1} : {favourite_movies[i]}")

# Can you figure out how to print out Movie 1: <Movie 1's name>. Movie 2: ...
# etc?
# HINT: YOU WILL NEED TO LOOK UP the enumerate command in Python
# using a Google search. This command allows you to loop over a list
# retaining both the item at every position and its index (i.e. position in the
# list).