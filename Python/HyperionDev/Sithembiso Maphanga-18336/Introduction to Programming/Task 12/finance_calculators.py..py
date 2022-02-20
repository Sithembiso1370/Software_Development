import math
# For this task, assume that you have been approached by a small financial
# company and asked to create a program that allows the user to access two
# different financial calculators: an investment calculator and a home loan
# repayment calculator.

# # Create a new Python file in this folder called finance_calculators.py.
# At the top of the file include the line import math

# Write the code that will do the following:
# The user should be allowed to choose which calculation they want to do.
# How the user capitalises their selection should not affect how the
# program proceeds. I.e. ‘Bond’, ‘bond’, ‘BOND’ or ‘investment’,
# ‘Investment’, ‘INVESTMENT’, etc. should all be recognised as valid
# entries. If the user doesn’t type in a valid input, show an appropriate
# error message.

calculation_to_do = input('''Choose either 'investment' or 'bond' from the menu below to proceed:\n
investment         - to calculate the amount you'll earn on interest 
bond               - to calculate the amount you'll have to pay on a home loan : ''')

if calculation_to_do.lower() == "investment" or calculation_to_do.lower() == "bond":
    # If the user selects ‘investment’, do the following
    if calculation_to_do.lower() == "investment":
        deposit_amount = float(input("Enter the amount to deposit : "))
        interest_rate = float(input("Enter the Interest rate : "))
        no_of_years_to_invest = float(input("Enter the number of years you plan to invest :"))
        interest = input("Choose 'simple'/'compound' interest :")
        # If the user selects ‘simple’, do the following
        if interest == 'simple':
            output_amount = deposit_amount*(1 + (interest_rate/100)*no_of_years_to_invest)
            print(f"The amount that you will get using {interest} interest after {round(no_of_years_to_invest)} years at {round(interest_rate,2)}% interest rate is : {round(output_amount,2)}")
        # otherwise If the user selects ‘compound’, do the following
        elif interest == 'compound':
            output_amount = deposit_amount*(1 + (interest_rate/100))**no_of_years_to_invest
            print(f"The amount that you will get using {interest} interest after {round(no_of_years_to_invest)} years at {round(interest_rate, 2)}% interest rate is : {round(output_amount, 2)}")
    # otherwise If the user selects ‘bond’, do the following
    elif calculation_to_do.lower() == "bond":
        # Calculate how much money the user will have to repay each month
        # and output the answer
        house_present_value = float(input("Enter the present Value of the House : "))
        interest_rate = float(input("Enter the Interest rate : "))
        no_of_months_to_repay = int(input("Enter the number of months you plan to take to repay the bond : "))
        repayable_monthly = ((interest_rate/100)*house_present_value)/(1 - (1+(interest_rate/100))**(-no_of_months_to_repay))
        print(f"The {calculation_to_do.lower()} amount to repay each month is : {repayable_monthly}")
else:
    print(f"error : The entry '{calculation_to_do}' is not a valid option")









