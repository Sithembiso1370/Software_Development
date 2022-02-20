

de_list = ['admin,333',"coca,4656"]


usernames = []
for i in de_list:
    if "admin" in i.split(",")[0]:
        usernames.append("admin")
    else:
        pass
print(usernames)