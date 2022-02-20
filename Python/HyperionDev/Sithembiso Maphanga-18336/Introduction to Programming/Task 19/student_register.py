# We will write a program called student_register.py that allows students
# to register for an exam venue.


# First, ask the user how many students are registering.
no_of_reg_students = int(input("how many students are you registering ? "))
# print(no_of_reg_students)

# using the with method to ensure my files closes automatically
with open('reg_form.txt', 'w') as ofile:
    for looping in  range(0,no_of_reg_students):
            # Each loop asks for the student to enter their ID number.
            Student_ID = input("Enter your ID number")
            # Write each of the ID numbers to a Text File called reg_form.txt
            ofile.write(Student_ID + "\n")

# This will be used as an attendance register that they will sign when they
# arrive at the exam venue.