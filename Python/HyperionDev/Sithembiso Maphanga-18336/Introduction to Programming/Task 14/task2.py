# A simple rule to determine whether a year is a leap year is to test whether it is
# a multiple of 4.

# Write a program to input a year and a number of years.

year_to_startwith = int(input("What year do you want to start with ? "))
years_to_check = int(input("How many years do you want to check ? "))

for i in range (0,years_to_check):
    if (year_to_startwith + i) % 4 == 0:
        print(f" {year_to_startwith+i} is a leap year")
        # year_to_startwith += i
    else:
        print(f"{year_to_startwith+i} isn’t a leap year")
        # year_to_startwith += i
