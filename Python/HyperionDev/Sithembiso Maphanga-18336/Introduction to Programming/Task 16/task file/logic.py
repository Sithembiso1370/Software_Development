# Write a program that displays a logical error (be as creative as possible!).



# produces a logical error when calculating the simple interest payable
#  simple interest formular A= P(1 + i.n)
# WHERE P = THE PRINCIPLE AMOUNT INVESTED
# WHERE i= THE INTEREST RATE
# WHERE N = THE NO OF PERIODS TO EARN INTEREST ON

P = int(input("Enter and amount to invest : "))
i = int(input("Choos Interest rate(Enter the integer value for the Percentage)  : "))/100
n = int(input("Choose Investment period(Number) : "))
# Therefore calculating the simple interest with a logical error we :
# The exclusion of brackets from this formuler causes a multiplication of P by 1 only and not multiplied by the interest
# only the interest rate multiplied by the number of periods is added to the principle amount
A = P*1+i*n
print(f"================ Incorrect Answere ========================================")
print(f"WITH LOGICAL ERROR : The Incorrect accumulated interest at {i*100}% for a period of {n} cycles is = {A}")



# Therefore calculating the simple interest without a logical error its :
# In this correct case with brackets the principle amount is multiplied by 1 then multiplied by the product of i*n
# them the 2 sums are added to arrive at the complete accumulated
print(f"\n \n================ Correct Answere ========================================")
A2 = P*(1 + i*n)
print(f"NO LOGICAL ERROR : The Correct accumulated interest at {i*100}% for a period of {n} cycles is = {A2}")







# correct code
# number = int(input("Enter a Number"))
# print(f"Your lucky number multiplied by 2 is : {number*2}")