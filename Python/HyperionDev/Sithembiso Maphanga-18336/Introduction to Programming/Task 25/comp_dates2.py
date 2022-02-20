# Compare two date class objects, just like comparing two numbers.
# importing datetime module
from datetime import *

# Enter birth dates and store
# into date class objects
d1, m1, y1 = [int(x) for x in input("Enter first"" person's date(DD/MM/YYYY) : ").split('/')]

b1 = date(y1, m1, d1)

# Input for second date
d2, m2, y2 = [int(x) for x in input("Enter second"" person's date(DD/MM/YYYY) : ").split('/')]

b2 = date(y2, m2, d2)

# Check the dates
if b1 == b2:
    print("Both persons are of equal age")
elif b1 > b2:
    print("The second person is older")
else:
    print("The first person is older")
