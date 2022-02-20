# In this task, you will be creating a program for a small business that can
# help it to manage tasks assigned to each member of the team. You will
# extend this task in the next Capstone project. Create a Python file called
# task_manager.py in this folder.


# importing the date time module for use later when i need to get the current date and time of adding a task
import datetime


# Defining functions to read and write from files

# function to write a line to a file - takes in a single string to write to a file
def write2file(filaname,string2write):
    with open(filaname, 'w') as ofile:
        # writing each line of the list into the new page all_numbers.txt
        if(ofile.write(string2write+"\n")):
            return 1
        else:
            return 0

# function to write a line to a file2 - takes in multiple strings to write to a chosen file
def write2file2(filaname,string2write):
    with open(filaname, 'w') as ofile:
        # writing each line of the list into the new page all_numbers.txt
        ofile.write(string2write[0] + ',' + string2write[1] + "\n")
        return "file written"


# function to read the whole file - reads everything within the chose file
# and returns a list of file contents
# on each line of the file being read
def readwholefile(filaname):
    lines_list = []
    with open(filaname, 'r+') as f:
        # looping through each line of data in the page numbers1.txt and appending to lines_list
        for line in f:
            # appending to lines_list
            lines_list.append(line)
        return lines_list

# function to read a line from a file - returns a chosen line for the file being read
# users feeds the file name parameter and line number to return
def readlinefile(filaname,line_no):
    lines_list = []
    with open(filaname, 'r+') as f:
        # looping through each line of data in the page numbers1.txt and appending to lines_list
        for line in f:
            # appending to lines_list
            lines_list.append(line)
    return lines_list[line_no-1]

# Your program should allow your users to do the following:
# Login. The user should be prompted to enter a username and
# password. A list of valid usernames and passwords are stored in a
# text file called user.txt.

# my variables
task_username = ""
task_title = ""
task_desciption = ""
task_date =""
task_duedate =""
task_completed = ""
new_tasks = ""


user_credential = 0
# to read
# users
users = readwholefile("user.txt")
# tasks
tasks = readwholefile("tasks.txt")

print(readlinefile("user.txt",1))

# The user should repeatedly be
# asked to enter a valid username and password until they provide
# appropriate credentials.
while  user_credential == 0:
    # The user should be prompted to enter a username and password.
    username = input("Enter your User name : ")
    password = input("Enter your Password : ")

    # storing the username and password in a string and adding a new line character
    # for the string to be added as a new line on the ne
    userpass = username + "," + password + "\n"


    if userpass in users:
        print("user exists")
        user_credential = 1

    #     The admin user is provided with a new menu option that allows
    # them to display statistics. When this menu option is selected, the total number of tasks and the total number of users should be displayed in a user-friendly manner.

        if username == "admin":
        #     The following menu should be displayed once the user has successfully logged in:
            user_choice = input('''Please select one of the following options : \n
            r - register user \n
            a - add task \n
            va - view all tasks \n
            vm - view my tasks \n
            e - exit \n
            ds - Display Statistics \n
            ''')
        #     If the user chooses ‘r’ to register a user, the user should be prompted for a new username and password. The user should also be asked to confirm the password. If the value entered to confirm
        # the password matches the value of the password, the username and password should be written to user.txt in the appropriate format.
            if user_choice == "r":
                if username == "admin":
                    new_username = input("Register new User name : ")
                    new_password = input("Register new Password : ")
                    confirm_pass = input("confirm the new users Password : ")
                    new_userpass = new_username + "," + new_password + "\n"
                    if new_password == confirm_pass:
                        # write new user
                        with open("user.txt", 'w') as f:
                            lines = users.copy()
                            lines.append(new_userpass)
                            for i in lines:
                                f.write(f"{i}")
                            print(f''' new user : {new_userpass.split(",")[0]} added''')
                    else:
                        print("passwords do not match please start over ")
                else:
                    print("Only the Administrator Can Register new users")
            elif user_choice == "a":
                task_username = input("Enter task User name : ")
                task_title = input("Enter task title : ")
                task_desciption = input("Enter task description : ")
                task_date = str(datetime.date.today())
                task_duedate = input("Enter task due date : ")
                task_completed = "No"
                new_tasks = task_username + "," + task_title + "," + task_desciption + "," + task_date + "," + task_duedate + "," + task_completed+"\n"
                # write new task
                with open("tasks.txt", 'w') as f:
                    lines = tasks.copy()
                    lines.append(new_tasks)
                    for i in lines:
                        f.write(f"{i}")
                    print(f" new task added : {new_tasks.split(',')[1]} ")
            #     add logic missing
            elif user_choice == "va":
                # If the user chooses ‘va’ to view all tasks, display the information for each task on the screen in an easy to read format.
                all_tasks = readwholefile("tasks.txt")
                for i in all_tasks:
                    print(f''' 
                    Username = {i.split(",")[0]} \n
                    Title = {i.split(",")[1]} \n
                    Description = {i.split(",")[2]} \n
                    Date Assigned = {i.split(",")[3]} \n
                    Due Date = {i.split(",")[4]} \n
                    Complete ? = {i.split(",")[5]} \n
                    ''')
            elif user_choice == "vm":
                # If the user chooses ‘vm’ to view the tasks that are assigned to them, only display all the tasks that have been assigned to the user that is
                # currently logged-in in a user-friendly, easy to read manner.
                all_tasks = readwholefile("tasks.txt")
                for i in all_tasks:
                    if i.split(",")[0] == username:
                        print(f''' 
                        Username = {i.split(",")[0]} \n
                        Title = {i.split(",")[1]} \n
                        Description = {i.split(",")[2]} \n
                        Date Assigned = {i.split(",")[3]} \n
                        Due Date = {i.split(",")[4]} \n
                        Complete ? = {i.split(",")[5]} \n
                        ''')
                    else:
                        print("User has no Tasks assigned to them")
            elif user_choice == "e":
                # if user chooses e exit the application
                print("Task Manager Closing .....")
                user_credential = 1
            elif user_choice == "ds":
                print(f" Totals number of tasks = {len(tasks)}")
                print(f" Totals number of Users = {len(users)}")
        else:
            #     The following menu should be displayed once the user has successfully logged in:
            user_choice = input('''Please select one of the following options : \n
                r - register user \n
                a - add task \n
                va - view all tasks \n
                vm - view my tasks \n
                e - exit \n
                ''')
            #     If the user chooses ‘r’ to register a user, the user should be prompted for a new username and password. The user should also be asked to confirm the password. If the value entered to confirm
            # the password matches the value of the password, the username and password should be written to user.txt in the appropriate format.
            if user_choice == "r":
                if username == "admin":
                    new_username = input("Register new User name : ")
                    new_password = input("Register new Password : ")
                    confirm_pass = input("confirm the new users Password : ")
                    new_userpass = new_username + "," + new_password + "\n"
                    if new_password == confirm_pass:
                        # write new user
                        with open("user.txt", 'w') as f:
                            lines = users.copy()
                            lines.append(new_userpass)
                            for i in lines:
                                f.write(f"{i}")
                            print(f''' new user : {new_userpass.split(",")[0]} added''')
                    else:
                        print("passwords do not match please start over ")
                else:
                    print("Only the Administrator Can Register new users")

            elif user_choice == "a":
                task_username = input("Enter task User name : ")
                task_title = input("Enter task title : ")
                task_desciption = input("Enter task description : ")
                task_date = str(datetime.date.today())
                task_duedate = input("Enter task due date : ")
                task_completed = "No"
                new_tasks = task_username + "," + task_title + "," + task_desciption + "," + task_date + "," + task_duedate + "," + task_completed + "\n"
                # write new task
                with open("tasks.txt", 'w') as f:
                    lines = tasks.copy()
                    lines.append(new_tasks)
                    for i in lines:
                        f.write(f"{i}")
                    print(f" new task added : {new_tasks.split(',')[1]} ")
            #     add logic missing
            elif user_choice == "va":
                # If the user chooses ‘va’ to view all tasks, display the information for each task on the screen in an easy to read format.
                all_tasks = readwholefile("tasks.txt")

                for i in all_tasks:
                    print(f''' 
                        Username = {i.split(",")[0]} \n
                        Title = {i.split(",")[1]} \n
                        Description = {i.split(",")[2]} \n
                        Date Assigned = {i.split(",")[3]} \n
                        Due Date = {i.split(",")[4]} \n
                        Complete ? = {i.split(",")[5]} \n
                        ''')

            elif user_choice == "vm":
                # If the user chooses ‘vm’ to view the tasks that are assigned to them, only display all the tasks that have been assigned to the user that is
                # currently logged-in in a user-friendly, easy to read manner.
                all_tasks = readwholefile("tasks.txt")

                for i in all_tasks:
                    if i.split(",")[0] == username:
                        print(f''' 
                            Username = {i.split(",")[0]} \n
                            Title = {i.split(",")[1]} \n
                            Description = {i.split(",")[2]} \n
                            Date Assigned = {i.split(",")[3]} \n
                            Due Date = {i.split(",")[4]} \n
                            Complete ? = {i.split(",")[5]} \n
                            ''')
                    else:
                        print("You have not been assigned any task as of yet.")

            elif user_choice == "e":
                # if user chooses e exit the application
                print("Task Manager Closing .....")
                user_credential = 1
    else:
        print("user DOES NOT exists")

