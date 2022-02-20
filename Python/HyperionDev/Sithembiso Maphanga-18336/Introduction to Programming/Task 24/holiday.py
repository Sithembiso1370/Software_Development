# Create a Python file called holiday.py in this folder
# You will need to create four functions:
hot_no_nights = 3
the_city = "Florence"
car_no_of_days = 5
# 1
# hotel_cost — This function will take the number of nights a user
# will be staying at a hotel as an argument, and return a total cost for
# the hotel stay (You can choose the price per night charged at the
# hotel).
def hotel_cos(no_of_nights):
    price_per_night = 1200
    Total_cost = price_per_night*no_of_nights
    return Total_cost
# test
# print(hotel_cos(1750))

# 2
# plane_cost — This function will take the city you are flying to as an
# argument and return a cost for the flight (Hint: use if/else if
# statements in the function to retrieve a price based on the chosen
# city).
def plane_cost(city):
    if city == "Florence":
        flight_cost = 2450
    elif city == "New York":
        flight_cost = 1250
    elif city == "Cape Town":
        flight_cost = 750
    elif city == "Prague":
        flight_cost = 1250
    return  flight_cost
# print(plane_cost("Prague"))

# 3
# car_rental — This function will take the number of days the car will
# be hired for as an argument and returns the total cost of the car
# rental.

def car_rental(no_of_days):
    cost_per_day = 480
    total_cost = cost_per_day*no_of_days
    return  total_cost

# test
# print(car_rental(7))

# 4
# holiday_cost — This function will take three arguments: the
# number of nights a user will be staying in a hotel, the city the user
# will be flying to and the number of days that the user will be hiring
# a car for. Using these three arguments, you can call all three of the
# above functions with respective arguments and finally return a
# total cost for your holiday.

def holiday_cost(no_of_nights,city,no_days_car_hired):
    # hotel cost for all nights
    price_per_night = 1200
    hotel_cost = price_per_night*no_of_nights

    #  flight cost
    if city == "Florence":
        flight_cost = 2450
    elif city == "New York":
        flight_cost = 1250
    elif city == "Cape Town":
        flight_cost = 750
    elif city == "Prague":
        flight_cost = 3250

    # car rental cost for all days
    cost_per_day = 480
    car_hire_cost = cost_per_day * no_days_car_hired
    holidycost =  hotel_cost+flight_cost+car_hire_cost
    return  holidycost

# print(holiday_cost(3,"Prague",2))
# print(holiday_cost(3,"Cape Town",2))


hot_no_nights = 3
the_city = "Florence"
car_no_of_days = 5
# Print out all the details about the holiday in a meaningful way!
print(f'''{"Print out all the details about the holiday in a meaningful way!".center(100)}
For a user going on holiday and staying at a hotel for '{hot_no_nights}' nights, the total hotel costs will be R {hotel_cos(hot_no_nights)} 
and if the city the user is flying to is '{the_city}' the total flight costs will be R {plane_cost(the_city)}
also if the user hires a car for {car_no_of_days} days the total  car rental cost will be R {car_rental(car_no_of_days)}
Therefore the total cost of the holiday will be : R {holiday_cost(hot_no_nights,the_city,car_no_of_days)}
''')


# Try using your program with different combinations of input to show its
# compatibility with different options.
hot_no_nights = 13
the_city = "Prague"
car_no_of_days = 10
print(f''' {"different combination : 1".center(100)}
For a user going on holiday and staying at a hotel for '{hot_no_nights}' nights, the total hotel costs will be R {hotel_cos(hot_no_nights)} 
and if the city the user is flying to is '{the_city}' the total flight costs will be R {plane_cost(the_city)}
also if the user hires a car for {car_no_of_days} days the total  car rental cost will be R {car_rental(car_no_of_days)}
Therefore the total cost of the holiday will be : R {holiday_cost(hot_no_nights,the_city,car_no_of_days)}
''')

hot_no_nights = 52
the_city = "New York"
car_no_of_days = 22
print(f''' {"different combination : 2".center(100)}
For a user going on holiday and staying at
 a hotel for '{hot_no_nights}' nights, the total hotel costs will be R {hotel_cos(hot_no_nights)} 
and if the city the user is flying to is '{the_city}' the total flight costs will be R {plane_cost(the_city)}
also if the user hires a car for {car_no_of_days} days the total  car rental cost will be R {car_rental(car_no_of_days)}
Therefore the total cost of the holiday will be : R {holiday_cost(hot_no_nights,the_city,car_no_of_days)}
''')