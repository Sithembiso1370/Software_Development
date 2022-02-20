# Create a new Python file in this folder called task3.py.
# Design a program that determines the award a person competing in a
# triathlon will receive.

#1. Your program should read the times in minutes for all three events of a
# triathlon, namely swimming, cycling and running and then calculate and
# display the total time taken to complete the triathlon.
qualifying_time = 100
award = ""
swimming_time = int(input("Enter the swimming time in minutes "))
cycling_time = int(input("Enter the cycling time in minutes "))
running_time = int(input("Enter the running time in minutes "))

triathlon_time = swimming_time + cycling_time + running_time
print(f"The total Triathlon time is : {triathlon_time} minutes")

if triathlon_time <= qualifying_time:
    award = "Provincial Colours"
elif triathlon_time > qualifying_time and triathlon_time <= (qualifying_time+5):
    award = "Provincial Half Colours"
elif triathlon_time > (qualifying_time+5) and triathlon_time <= (qualifying_time+10):
    award = "Provincial Scroll"
else:
    award = "No award"

print(f"award = {award}")

