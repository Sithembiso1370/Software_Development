#1. Create a new Python file in this folder called strings.py
#2. Declare the variable called hero that contains the value “Super Man”

hero = "Super Man"

#3. Print it out in the following way: S^U^P^E^R M^A^N
# print(f"hero length = {len(hero)}")
# print(f"super = {hero[0:5]}")
# print(f"Man = {hero[6:9]}")

print(f"{hero[0].upper()}{hero[1:4].replace('','^').upper()}{hero[4:5].upper()} {hero[6].upper()}{hero[7:8].replace('','^').upper()}{hero[8:9].upper()}")