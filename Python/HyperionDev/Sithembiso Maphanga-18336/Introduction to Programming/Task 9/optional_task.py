# Create a Python file called optional_task.py in this folder.
# Design a program for a department store to calculate the monthly wage
# for two different types of employees.
# Employees can either be a salesperson or a manager.

salesperson = False
manager= False
manager_hrly_rate = 40.00
salescommision = 0.08
sales_Fixed_sal = 2000.00


# Salespeople earn an 8% commission on their gross sales and a fixed salary
# of R2 000.00 per month. Managers earn an hourly rate of R40.00.

user = input("is user salesperson or a manager.\n")

if user.lower() == "salesperson":
    gross_sales = float(input("Enter your gross sales for the month"))
    total_m_wage = gross_sales*salescommision + sales_Fixed_sal
    print(f"The total monthly wage for this {user.title()} is R{total_m_wage} ")
elif user.lower() == "manager":
    num_of_hours_worked = int(input("Enter the number of hours worked for the month "))
    total_m_wage = num_of_hours_worked*manager_hrly_rate
    print(f"The total monthly wage for this {user.title()} is R{total_m_wage}")

