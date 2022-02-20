import datetime
# Create a Python file called baby.py in this folder.
# This program will be used to test if the user is 18 or older and allowed entry
# into a party.
datetoday = datetime.datetime.now()

# Ask the user to enter the year they were born and calculate if they are 18 or
# older.
year_born = int(input("Enter the year you where born in"))

if (datetoday.year-year_born) >= 18:
    print("Congrats, you are old enough.")

# print("test calc = "+str(datetoday.year-year_born)) -- difference working








# print("============checking Date methods===============")
# print("datetoday = " +str(datetoday))
# print("datetoday.year = " +str(datetoday.year))
# print("datetoday.month = " +str(datetoday.month))
# print("datetoday.day = " +str(datetoday.day))
# print("datetoday.tzinfo = " +str(datetoday.tzinfo))
# print("datetoday.tzinfo = " +str(datetoday.fold))
# print("============END===============")