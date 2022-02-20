# This is an example Python program.
# The user inputs a number.
# The program then outputs all the EVEN numbers from 0 to that number, using a for loop and if statement.


range_num = int(input("Enter the max number you'd like to go up to: \n"))


for i in range (0, range_num):   #  We define a for loop that runs from 0 to the entered number. i is the current number that the loop is on.
	if i%2 == 0 : # This checks if the current number of the loop is EVEN. (i.e. if you divide it by 2, you get a 0 remainder. This is what the %, or MODULUS command does.)
		print(i)
		
				
# Run this program. Are you impressed?
