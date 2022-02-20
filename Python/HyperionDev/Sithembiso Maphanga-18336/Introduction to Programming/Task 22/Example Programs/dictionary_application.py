max_points = [25, 25, 50, 25, 100]
assignments = ['Homework 1', 'Homework 2', 'Quiz    ', 'Assignment', 'Test']
students = {'#Max': max_points}

menu_choice = 0
while menu_choice != 5:
    print()
    print("1. Add student")
    print("2. Record grades")
    print("3. Print grades")
    print("4. Remove student")
    print("5. Exit")
    menu_choice = int(input("Menu Choice (1-5): "))
    if menu_choice == 1:
        name = input("Student to add: ")
        students[name] = [0] * len(max_points)
    elif menu_choice == 4:
        name = input("Student to remove: ")
        if name in students:
            del students[name]
        else:
            print ("Student:", name, "not found")
    elif menu_choice == 3:
            print ('\t', end=" ")
            for i in range(len(assignments)):
                print(assignments[i], '\t', end=" ") #The argument end=" " appends a space instead of a newline
            print()
            keys = students.keys()
            for x in keys:
                print (x, '\t', end=" ")
                grades = students[x]
                for i in range(len(grades)):
                   print (grades[i], '\t', '\t', end=" ")
                print()
    elif menu_choice == 2:
        print("Record Grade")
        name = input("Student: ")
        if name in students:
            grades = students[name]
            print("Type in the number of the grade to record. ")
            for i in range(len(assignments)):
                print(i + 1 , ":" , assignments[i], ' ', end=" ")
            print()
            for i in range(len(grades)):
                print(grades[i], '\t', '\t', end=" ")
            print()
            print("Type a 0 (zero) to exit")
            which = 1234
            while which != -1:
                which = int(input("Change which Grade: "))
                which = which - 1
                if 0 <= which < len(grades):
                    grade = input("Grade: ")
                    grades[which] = grade
                elif which != -1:
                    print("Invalid Grade Number")
        else:
            print("Student not found")
    elif menu_choice == 5:
        print("Goodbye!")
