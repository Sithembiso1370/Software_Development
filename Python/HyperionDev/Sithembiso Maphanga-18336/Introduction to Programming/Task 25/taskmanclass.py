# importing my register,add and view all and view mine  functions
from taskfunctions import *



class TaskMan():
    def __init__(self):
        self.mainTask()

    def mainTask(self,user_credential = 0):
        user_cred = user_credential
        while user_cred == 0:
            users = readwholefile("user.txt")
            username = input("Enter your User name : ")
            password = input("Enter your Password : ")
            userpass = username + "," + password + "\n"
            if userpass in users:
                if username == "admin":
                    user_choice = user_menchoice(username)
                    handleUserChoice(user_choice, username)
                else:
                    user_choice = user_menchoice(username)
                    handleUserChoice(user_choice, username)
            else:
                print("user DOES NOT exists")
            done = input("Do you want to continue Y/N ?")
            if done.upper() == "N":
                print("Task manager closing .....")
                user_cred = 1







# app = TaskMan()
# app.mainTask()