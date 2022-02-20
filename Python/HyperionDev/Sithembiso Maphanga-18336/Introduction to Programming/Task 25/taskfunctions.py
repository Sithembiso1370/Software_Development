# importing the date time module for use later when i need to get the current date and time of adding a task
import locale
from datetime import datetime
from fileHandler import *

# method to register a user
# reg_user — that is called when the user selects ‘r’ to register a user.
def reg_user(user_name, userz, filename,tries = 0):
    # To keep track of the number of times the user tries to enter the credentials
    if tries == 0:
        # First Check if the  users name is admin
        if user_name == "admin":
            # If so Take in the input for a new user name
            new_username = input("Register new User name : ")
            # Take in the input for a new password
            new_password = input("Register new Password : ")
            # Take in the input to confirm the new password
            confirm_pass = input("confirm the new users Password : ")
            # Create a String with a new user name and password joined with  a comma
            new_userpass = new_username + "," + new_password + "\n"

            # If the password and password confirmation are the same
            if new_password == confirm_pass :
                # Create a list to hold
                usernames = []
                # Loop through the users list
                for i in userz:
                    # Search for the user name in each line read and split into an array to compare the first index
                    # which should hold the value of the user name
                    if new_username in i.split(",")[0]:
                        #
                        usernames.append(new_username)
                if new_username in usernames:
                    result = 0
                else:
                    # write new user
                    with open(filename, 'w') as f:
                        lines = userz.copy()
                        lines.append(new_userpass)
                        for i in lines:
                            f.write(f"{i}")
                        result = f''' new user : {new_userpass.split(",")[0]} added'''
            else:
                result = "passwords do not match please start over "
        else:
            result = "Only the Administrator Can Register new users"
    else:
        if user_name == "admin":
            new_username = input("That user exists try again : Register new User name : ")
            new_password = input("Register new Password : ")
            confirm_pass = input("confirm the new users Password : ")
            new_userpass = new_username + "," + new_password  + "\n"
            if new_password == confirm_pass :
                usernames = []
                for i in userz:
                    if new_username in i.split(",")[0]:
                        usernames.append(new_username)
                if new_username in usernames:
                    result = 0
                else:
                    # write new user
                    with open(filename, 'w') as f:
                        lines = userz.copy()
                        lines.append(new_userpass)
                        for i in lines:
                            f.write(f"{i}")
                        result = f''' new user : {new_userpass.split(",")[0]} added'''
            else:
                result = "passwords do not match please start over "
        else:
            result = "Only the Administrator Can Register new users"
    return result

# method to add tasks
# add_task — that is called when a user selects ‘a’ to add a new task.
# my_date = datetime.date.today()
my_date = datetime.today().date()

# print(my_date)
def add_task(filename, tasks_list):
    task_username = input("Enter task User name : ")
    task_title = input("Enter task title : ")
    task_desciption = input("Enter task description : ")
    task_date = str(my_date)
    task_duedate = input("Enter task due date in the format(yyyy-mm-dd): ")
    task_completed = "No"
    new_tasks = task_username + "," + task_title + "," + task_desciption + "," + task_date + "," + task_duedate + "," + task_completed + "\n"
    # write new task
    with open(filename, 'w') as f:
        lines = tasks_list.copy()
        lines.append(new_tasks)
        for i in lines:
            f.write(f"{i}")
        result = f" new task added : {new_tasks.split(',')[1]} "
    return result

# method to view all tasks
# view_all — that is called when users type ‘va’ to view all the tasks listed in ‘tasks.txt’.
def view_all():
    # If the user chooses ‘va’ to view all tasks, display the information for each task on the screen in an easy to read format.
    all_tasks = readwholefile("tasks.txt")
    task_count = 1
    result = ''
    for i in all_tasks:
        result += f''' Task No : {task_count}
       Username = {i.split(",")[0]} \n
       Title = {i.split(",")[1]} \n
       Description = {i.split(",")[2]} \n
       Date Assigned = {i.split(",")[3]} \n
       Due Date = {i.split(",")[4]} \n
       Complete ? = {i.split(",")[5]} \n
       '''
        result = result + "\n"
        task_count += 1
    print(result)


# method to display only current users tasks
# view_mine — that is called when users type ‘vm’ to view all the tasks that have been assigned to them.
def view_mine(user_name,task_no =0):
    my_taskz = []
    all_tasks = readwholefile("tasks.txt")
    task_count = 0
    if task_no == 0:
        for i in all_tasks:
            if i.split(",")[0] == user_name:
                my_taskz.append(i)
    else:
        specific_task = []
        for i in all_tasks:
            if i.split(",")[0] == user_name:
                my_taskz.append(i)
        if(len(my_taskz)) >= int(task_no):
            specific_task.append(my_taskz[int(task_no)-1])
            my_taskz = specific_task
        else:
            my_taskz = "Index chosen doe not exist"

    return my_taskz


# method to handle only user menue options
def user_menchoice(user):
    user_choice = ''
    if user == "admin":
        user_choice = input('''Please select one of the following options : \n
        r - register user \n
        a - add task \n
        va - view all tasks \n
        vm - view my tasks \n
        gr - generate reports \n
        ds - Display Statistics \n
        e - exit \n
        ''')
    else:
        user_choice = input('''Please select one of the following options : \n
            a - add task \n
            va - view all tasks \n
            vm - view my tasks \n
            e - exit \n
            ''')
    return user_choice


def generatereports():
    # files to write
    files2write = ["task_overview.txt","user_overview.txt"]
    #  get the list of tasks and store in a variable
    tasks = readwholefile("tasks.txt")
    # get the list of users store in a variable
    users = readwholefile("user.txt")

    # Create a list to hold user report answeres to tasks set forth
    user_report = []
    # Create a list to hold task report answeres to tasks set forth
    task_report = []

    # Create a A Dictionary named Report that will hold 2 lists named user_report and taskreport
    management_report = {
        "User_report" : user_report,
        "Task_report": task_report
    }

    # task_overview.txt
    # The total number of tasks that have been generated
    tasks_generated = len(tasks)
    management_report["Task_report"].append(tasks_generated)

    # The total number of completed tasks.
    completed_tasks = 0

    for x in tasks:
    #     test if the last variable found on the last index of the splitted string is marked complete or not if so
        if str(x.split(",")[-1]).lower() == "yes\n":
            completed_tasks += 1

    management_report["Task_report"].append(completed_tasks)

    # The total number of uncompleted tasks.
    uncompleted_tasks = len(tasks)- completed_tasks
    management_report["Task_report"].append(uncompleted_tasks)

    # The total number of tasks that haven’t been completed and that are overdue.
    uncompleted_overdue = int()
    for x in tasks:
        #test if the last variable found on the last index of the splitted string is marked complete or not if so
        if str(x.split(",")[-1]).lower() == "no\n" and datetime.today() > datetime.strptime(x.split(",")[-3],"%Y-%m-%d"):
            uncompleted_overdue += 1
    management_report["Task_report"].append(uncompleted_overdue)

    # The percentage of tasks that are incomplete.
    incompl_percentage = (uncompleted_tasks/len(tasks))*100
    management_report["Task_report"].append(incompl_percentage)

    # The percentage of tasks that are overdue.
    percentage_overdue = (uncompleted_overdue/len(tasks))*100
    management_report["Task_report"].append(percentage_overdue)
    # print(management_report["User_report"])

    # user_overview.txt
    # The total number of users registered with task_manager.py
    total_users = len(users)
    management_report["User_report"].append(total_users)

    # The total number of tasks that have been generated and tracked using the task_manager.py
    # == tasks_generated

    # The total number of tasks assigned to that user.
    # Creating a list to hold a total number of tasks for each user
    users_tasks = [0, 0, 0]
    for user in range(len(users)):
        # print(users[user])
    #     for each user loop through the task list
        for task in range(len(tasks)):
            if users[user].split(",")[0] == tasks[task].split(",")[0]:
                users_tasks[user] += 1
    # print(users_tasks)
    management_report["User_report"].append(users_tasks)


    # What percentage of the total number of tasks have been assigned to that user?
    # creating a list to hold percentages for each user
    users_tasks_percentage = [0, 0, 0]
    for user in range(len(users)):
        users_tasks_percentage[user] += (users_tasks[user]/len(tasks))*100
    # print(users_tasks_percentage)
    management_report["User_report"].append(users_tasks_percentage)
    # print(management_report["User_report"])

    # What percentage of the tasks assigned to that user have been completed?
    users_tasks_completed = [0, 0, 0]
    for user in range(len(users)):
        # print(users[user])
    #     for each user loop through the task list
        for task in range(len(tasks)):
            if users[user].split(",")[0] == tasks[task].split(",")[0] and "yes" in tasks[task].split(",")[-1].lower():
                users_tasks_completed[user] += 1
                # print(tasks[task])
    # print(users_tasks_completed)
    users_tasks_completed_percentages = [0, 0, 0]
    for i in range(len(users)):
        if users_tasks[i] == 0:
            users_tasks_completed_percentages[i] = 0
        else:
            users_tasks_completed_percentages[i] = users_tasks_completed[i] / users_tasks[i] * 100
    # print(users_tasks_completed_percentages)
    management_report["User_report"].append(users_tasks_completed_percentages)
    # print(management_report["User_report"])

    # What percentage of the tasks assigned to that user must still be completed?
    users_tasks_uncompleted_percentages = [0, 0, 0]
    for i in range(len(users)):
        users_tasks_uncompleted_percentages[i] = 100 - users_tasks_completed_percentages[i]
    # print(users_tasks_uncompleted_percentages)
    management_report["User_report"].append(users_tasks_uncompleted_percentages)
    # print(management_report["User_report"])

    # What percentage of the tasks assigned to that user have not yet been completed and are overdue?
    users_tasks_uncompleted_overdue = [0, 0, 0]
    for user in range(len(users)):
        # print(users[user])
    #     for each user loop through the task list
        for task in range(len(tasks)):
            if users[user].split(",")[0] == tasks[task].split(",")[0] and "no" in tasks[task].split(",")[-1].lower() and datetime.today() > datetime.strptime(tasks[task].split(",")[-3],"%Y-%m-%d"):
                users_tasks_uncompleted_overdue[user] += 1
                # print(tasks[task])
    # print(users_tasks_uncompleted_overdue)
    percentage_users_tasks_uncompleted_overdue = [0,0,0]
    for user in range(len(users)):
        if users_tasks[user] == 0:
            percentage_users_tasks_uncompleted_overdue[user] = 0
        else:
            percentage_users_tasks_uncompleted_overdue[user] = (users_tasks_uncompleted_overdue[user]/users_tasks[user])*100
    management_report["User_report"].append(percentage_users_tasks_uncompleted_overdue)

    num_users_generated_tracked = len(users)
    return management_report


def write_reports(user_filename,task_filename):
    # for user report
    result = ''
    with open(user_filename, 'w') as f:
        for i in generatereports()["User_report"]:
            f.write(f"{i} \n")
            result = f" new user report added : {generatereports()['User_report']} "

    with open(task_filename, 'w') as f:
        for i in generatereports()["Task_report"]:
            f.write(f"{i} \n")
            result += f" new Task report added : {generatereports()['Task_report']} "
    return  result
# print(write_reports("user_overview.txt","task_overview.txt"))


def displayreports():
    #  get the list of tasks and store in a variable
    tasks = readwholefile("tasks.txt")
    # get the list of users store in a variable
    users = readwholefile("user.txt")
    user_report_data = readwholefile("user_overview.txt")
    task_report_data = readwholefile("task_overview.txt")
    # for stringed lists
    #
    user_report_display = ''
    report_display = '| Task Report | \n'

    report_display += f"Total tracked Tasks = {task_report_data[0]} \n"
    report_display += f"Total number of completed tasks = {task_report_data[1]} \n"
    report_display += f"Total number of incomplete tasks = {task_report_data[2]} \n"
    report_display += f"Total number of tasks that haven’t been completed and that are overdue = {task_report_data[3]} \n"
    report_display += f"The percentage of tasks that are incomplete = {task_report_data[4]} \n"
    report_display += f"The percentage of tasks that are overdue = {task_report_data[5]} \n"
    # for stringed lists
    # print(report[1].replace('[','').replace(']','').split(',')[1])


#     Add user report
    report_display += '| User Report | \n'
    report_display += f"The total number of users registered with task_manager.py = {user_report_data[0]} \n"
    report_display += f"The total number of tasks that have been generated and tracked using the task_manager.py = {task_report_data[0]} \n"
    report_display += f''' Total Tasks assigned to user :
    The total number of tasks assigned to  {users[0].split(',')[0]} = {user_report_data[1].replace('[','').replace(']','').split(',')[0]}
    The total number of tasks assigned to  {users[1].split(',')[0]} = {user_report_data[1].replace('[','').replace(']','').split(',')[1]}
    The total number of tasks assigned to  {users[2].split(',')[0]} = {user_report_data[1].replace('[','').replace(']','').split(',')[2]}
    '''
    report_display += f''' Percentage of the total number of tasks have been assigned to that user?:
    The percentage of tasks assigned to  {users[0].split(',')[0]} = {user_report_data[2].replace('[','').replace(']','').split(',')[0]}
    The percentage of tasks assigned to  {users[1].split(',')[0]} = {user_report_data[2].replace('[','').replace(']','').split(',')[1]} 
    The percentage of tasks assigned to  {users[2].split(',')[0]} = {user_report_data[2].replace('[','').replace(']','').split(',')[2]}'''

    report_display += f''' Percentage of the tasks assigned to that user have been completed?
    The percentage of tasks assigned to  {users[0].split(',')[0]} that user have been completed = {user_report_data[3].replace('[','').replace(']','').split(',')[0]} 
    The percentage of tasks assigned to  {users[1].split(',')[0]} that user have been completed = {user_report_data[3].replace('[','').replace(']','').split(',')[1]} 
    The percentage of tasks assigned to  {users[2].split(',')[0]} that user have been completed = {user_report_data[3].replace('[','').replace(']','').split(',')[2]}'''

    report_display += f'''Percentage of the tasks assigned to that the user must still complete
    The percentage of tasks assigned to  {users[0].split(',')[0]} that user must still complete = {user_report_data[4].replace('[','').replace(']','').split(',')[0]} 
    The percentage of tasks assigned to  {users[1].split(',')[0]} that user must still complete = {user_report_data[4].replace('[','').replace(']','').split(',')[1]} 
    The percentage of tasks assigned to  {users[2].split(',')[0]} that user must still complete = {user_report_data[4].replace('[','').replace(']','').split(',')[2]}'''

    report_display += f'''Percentage of the tasks assigned to that user have not yet been completed and are overdue
    The percentage of tasks assigned to  {users[0].split(',')[0]} that user has not completed and are overdue = {user_report_data[5].replace('[','').replace(']','').split(',')[0]} 
    The percentage of tasks assigned to  {users[1].split(',')[0]} that user has not completed and are overdue = {user_report_data[5].replace('[','').replace(']','').split(',')[1]} 
    The percentage of tasks assigned to  {users[2].split(',')[0]} that user has not completed and are overdue = {user_report_data[5].replace('[','').replace(']','').split(',')[2]}'''

    return report_display


# method to handle user Choices
def handleUserChoice(user_choice,username ="no user"):
    # users
    users = readwholefile("user.txt")
    # tasks
    tasks = readwholefile("tasks.txt")
    if username != "admin":
        if user_choice == "a":
            add_task("tasks.txt", tasks)
        #     add logic missing
        elif user_choice == "va":
            # If the user chooses ‘va’ to view all tasks, display the information for each task on the screen in an easy to read format.
            view_all()
        elif user_choice == "vm":
            # If the user chooses ‘vm’ to view the tasks that are assigned to them, only display all the tasks that have been assigned to the user that is
            # currently logged-in in a user-friendly, easy to read manner.
            taskz = view_mine(username)
            print(taskz)
            count = 0
            for i in taskz:
                count += 1
                print(f'''Task {count} :{i}''')
        elif user_choice == "gr":
            # if user chooses e exit the application
            print(displayreports())
            # user_credential = 1
        elif user_choice == "e":
            # if user chooses e exit the application
            print("Task Manager Closing .....")
            user_credential = 1
    else:
        # If the  user chooses to register a new user:
        if user_choice == "r":
            # Create a variable to keep the program looping on this logic until its turned to 1 end the program may do something else
            user_exists = 0
            # Creating a closed environment untill user exists is set to anything other than 0
            while user_exists == 0:
                # Calling my function to register new user which returna
                # 0 if the user being registered already exists
                reg_return = reg_user(username, users, "user.txt")

                # Checking if my user has been succesfully registered
                if reg_return == 0:
                    # Do the same thing until reg return is set to 1
                    reg_return = reg_user(username, users, "user.txt", 1)
                    if reg_return == 0:
                        user_exists = 0
                    else:
                        print(reg_return)
                        user_exists = reg_return
                else:
                    user_exists = 1
        elif user_choice == "a":
            add_task("tasks.txt", tasks)
        #     add logic missing
        elif user_choice == "va":
            # If the user chooses ‘va’ to view all tasks, display the information for each task on the screen in an easy to read format.
            view_all()
        elif user_choice == "vm":
            # If the user chooses ‘vm’ to view the tasks that are assigned to them, only display all the tasks that have been assigned to the user that is
            # currently logged-in in a user-friendly, easy to read manner.
            taskz = view_mine(username)
            print(taskz)
            count = 0
            for i in taskz:
                count += 1
                print(f'''Task {count} :
                {i.split(",")[0]}
               Username = {i.split(",")[0]} \n
               Title = {i.split(",")[1]} \n
               Description = {i.split(",")[2]} \n
               Date Assigned = {i.split(",")[3]} \n
               Due Date = {i.split(",")[4]} \n
               Complete ? = {i.split(",")[5]} \n
                ''')


            user_spefici_task = int(input(f'''
            To View a specific task enter its task number : 1 - {count} 
            To return to the main menue :enter -1
            '''))
            print(f''' Task {user_spefici_task} Selected :
            Username = {view_mine('admin', user_spefici_task)[0].split(',')[0]}
            Title = {view_mine('admin', user_spefici_task)[0].split(',')[1]}
            Description = {view_mine('admin', user_spefici_task)[0].split(',')[2]}
            Date Assigned = {view_mine('admin', user_spefici_task)[0].split(',')[3]}
            Due Date = {view_mine('admin', user_spefici_task)[0].split(',')[4]}
            Complete ? = {view_mine('admin', user_spefici_task)[0].split(',')[5]}
            ''')
            print("==================================================================")

            task_complete = input(f'''Do you want to mark the task as complete type"Yes"  or "No''')
            if(task_complete.lower() == "no"):
                # update to npo
                pass
            elif(task_complete.lower() == "yes"):
                # update to yes
                print(UpdateLineInfile("tasks.txt",task_complete,user_spefici_task,"old_word",-1))
            # Edit username
            Edit_username = input(f'''Do you also want to edit the user name ? Type (yes/no)''')
            if (Edit_username.lower() == "no"):
                # update to npo
                pass
            elif (Edit_username.lower() == "yes"):
                # update to yes
                edit_username = input('Enter the new user name')
                print(UpdateLineInfile("tasks.txt", edit_username, user_spefici_task, "old_word",0))

            # Edit due date
            Edit_due_date = input(f'''Do you also want to edit the Tasks Due date ? Type (yes/no)''')
            if (Edit_due_date.lower() == "no"):
                # update to npo
                pass
            elif (Edit_due_date.lower() == "yes"):
                # update to yes
                edit_dd = input("Enter new date in the format  (dd/mm/yyyy) ")
                print(UpdateLineInfile("tasks.txt", edit_dd, user_spefici_task, "old_word",3))

        elif user_choice == "gr":
            # if user chooses e exit the application
            print(displayreports())
        elif user_choice == "e":
            # if user chooses e exit the application
            print("Task Manager Closing .....")
            user_credential = 1
        elif user_choice == "ds":
            print(f" Totals number of tasks = {len(tasks)}")
            print(f" Totals number of Users = {len(users)}")


