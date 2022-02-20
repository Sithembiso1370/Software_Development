# Create a new Python file in this folder called cafe.py.

# Create a list called menu, which should contain at least 4 items in the cafe.
menue = ["Black Coffee","Latte","Scons","Cup Cakes"]

# Next, create a dictionary called stock, which should contain the stock value for each item on your menu.
stock = {
    menue[0]: "dd8829271",
    menue[1]: "dd8829272",
    menue[2]: "dd8829273",
    menue[3]: "dd8829273"
}

# Create another dictionary called price, which should contain the prices for
# each item on your menu.
price = {
    menue[0]: 33,
    menue[1]: 45,
    menue[2]: 25,
    menue[3]: 20
}

# Next, calculate the total stock worth in the cafe. You will need to
# remember to loop through the appropriate dictionaries and lists to do
# this.
stock_worth = 0


for x in price:
    stock_worth += price[x]

# Finally, print out the result of your calculation.
print(f"R {stock_worth}")
