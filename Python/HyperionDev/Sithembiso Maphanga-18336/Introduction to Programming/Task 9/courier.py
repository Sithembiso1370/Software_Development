# Create a Python file called courier.py in this folder.
# You need to design a program for a courier company to calculate the cost
# of sending a parcel.

#1. Ask the user to enter the price of the package they would like to purchase.
priceOf_package = float(input("Enter the price of the package. \n "))
# print(priceOf_package)

#2. Ask the user to enter the total distance of the delivery in kms.
delivery_dist = float(input("Enter the total distance of the delivery in kms. \n "))
# print(delivery_dist)

#3. Now add on the delivery costs to get the final cost of the product:
airOrFreight = 0.00
insurance = 0.00
giftNogift =0.00
priority_Standard = 0
# Air R0.36 per km or freight R0.25 per km
if input("Air or freight").lower() == "air":
    airOrFreight += 0.36
elif input("Air or freight").lower() == "freight":
    airOrFreight += 0.25

# Full insurance R50.00 or limited insurance R25.00
if input("Insurance Full or limited ?").lower() == "full":
    insurance += 50
elif input("Insurance Full or limited ?").lower() == "limited":
    insurance += 25

# Gift R15.00 or no gift R0.00
if input("Gift or no gift").lower() == "gift":
    giftNogift += 15
elif input("Gift or no gift").lower() == "no gift":
    giftNogift += 0

# Priority R100.00 or standard delivery R20.00
if input("Priority/standard delivery").lower() == "priority":
    priority_Standard += 100
elif input("Priority/standard delivery").lower() == "standard":
    priority_Standard += 20

delivery_costs = airOrFreight*delivery_dist + insurance + giftNogift + priority_Standard
total_cost = delivery_costs + priceOf_package
print(f"\ntotal_cost = {total_cost}")