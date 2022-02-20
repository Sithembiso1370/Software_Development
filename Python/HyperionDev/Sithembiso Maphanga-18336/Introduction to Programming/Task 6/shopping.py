# Create a new Python file in this folder called shopping.py.
#1. Once this is done, ask the user to enter the name of three products

Product1 = input("Enter Product Name")
Product2 = input("Enter Product Name")
Product3 = input("Enter Product Name")
# print(f"products = {Product1},{Product2},{Product3}")

#2. Now ask for the price of each product. Each product must have two decimal values.
Product1price = float(input("Enter Product1 price"))
Product2price = float(input("Enter Product2 price"))
Product3price = float(input("Enter Product3 price"))
# print(f"product prices = {Product1price},{Product2price},{Product3price}")

#3. Calculate the total of all three products.
total = round(Product1price + Product2price + Product3price,2)
# print("total = "+ str(total))

#4. Calculate the average price of the three products. (Hint: you may want to look up round() )
average_price = round(total/3,2)
# print("av_price = "+ str(average_price))

#5. Then print out the following sentence after performing your calculations: “The Total of [product1], [product2], [product3] is Rxx,xx and the
# average price of the items is Rxx,xx.”
print(f"“The Total of {Product1}, {Product2}, {Product3} is R{total} and the average price of the items is R{average_price}.")