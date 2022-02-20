# Create a new file in this folder called optional_task.py
# Ask the user to enter a number less than or equal to 100.


while True:
    user_num = int(input("enter a number less than or equal to 100 : "))
    if user_num % 2 == 0:
        num_by_2 = user_num*2
        print(num_by_2)
    else:
        num_by_3 = user_num*3
        print(num_by_3)
        break