# # importing my register,add and view all and view mine  functions
# from taskfunctions import *
#
#
# # Your program should allow your users to do the following:
# # Login. The user should be prompted to enter a username andpassword.
# # A list of valid usernames and passwords are stored in a text file called user.txt.
#
# # Variable to keep the user logged in the task manager appication
# user_credential = 0
#
#
# # The user should repeatedly be
# # asked to enter a valid username and password until they provide
# # appropriate credentials.
# while  user_credential == 0:
#     # users - Capturing the joined list keys  of the user.txt page into a variable named users
#     users = readwholefile("user.txt")
#
#     # The user should be prompted to enter a username and password.
#     # Request  username input and store in a variable named  username
#     username = input("Enter your User name : ")
#     # Request  password input and store in a variable named  password
#     password = input("Enter your Password : ")
#
#     #userpass - storing the username and password in a string and adding a new line character
#     # for the string to be added as a new line on the list
#     userpass = username + "," + password + "\n"
#
#     # Check to see if the newly entered user password matches and of the strings  found on the list of strings in the users list
#     if userpass in users:
#         # print("user exists")
#     # The admin user is provided with a new menu option that allows
#     # them to display statistics. When this menu option is selected, the total number of tasks and the total number of users should be displayed in a user-friendly manner.
#         if username == "admin":
#             #The following menu should be displayed once the user has successfully logged in:
#             # prompt the user for a choice and return the result into this variable
#             user_choice = user_menchoice(username)
#
#             # Apply the Necessary Model/Process the information and return the result to the console
#             handleUserChoice(user_choice, username)
#         else:
#             # prompt the user for a choice and return the result into this variable
#             user_choice = user_menchoice(username)
#
#             # Apply the Necessary Model/Process the information and return the result to the console
#             handleUserChoice(user_choice, username)
#     else:
#         print("user DOES NOT exists")
#
#     # Check if the user is done or still wants to do something
#     done = input("Do you want to continue Y/N ?")
#     if done == "N":
#         user_credential = 1
#     else:
#         pass