# Create a new Python file in this folder called task3.py
# The activities in this task are all different and are designed to test your
# knowledge of loops.

# Create a while loop that will display count down from 20 to 0.
# start = 20

for i in range(0,20):
    print(20 - i)

# Next, create a loop that will display all the even numbers between 1 and
# 20.

for i in range(1,20):
    if i % 2 == 0:
        print(i)

# Now, create a loop that will produce the following output

for i in range(0,6):
    print("*"*i)

# Finally, write the code to compute the greatest common divisor (GCD, or
# highest common factor) of two positive integers.

int1 = 16
int2 = 28
gcd = 0

for i in range(1, 28):
    if int2 % i == 0 and int1 % i == 0:
        gcd = i

print(f"Highest Common factor is = {gcd}")