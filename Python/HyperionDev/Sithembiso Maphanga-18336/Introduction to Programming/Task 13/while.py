# Create a new file called while.py.
# Write a program that always asks the user to enter a number.
nums_sum = 0
nums_count = 0
nums_average = 0

# When the user enters -1, the program should stop requesting the user to
# enter a number
# The program must then calculate the average of the numbers entered,
# excluding the -1.
# Make use of the while loop repetition structure to implement the
# program.
while True:
    number = int(input("Enter a number : "))
    if number == -1:
        nums_average = round(nums_sum/nums_count,2)
        print(f"The of the {nums_count} numbers entered average is {nums_average}")
        break
    else:
        nums_sum += number
        nums_count += 1
