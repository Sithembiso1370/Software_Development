# Write a program that reads the data from the text file called DOB.txt and prints
# it out in two different sections in the format displayed below:
Names = ""
Birthdates = ""


# Use the with method so that we automatically close the file
with open('Example_Programs/DOB.txt', 'r+') as f:
        for line in f:
                Names += line[0] + " " + line.split()[1]+"\n"
                Birthdates += line.split()[-3] + " "+line.split()[-2]+ " "+line.split()[-1]+"\n"
                # print(line[0] + " " + line.split()[1])

        print("Name")
        print(Names)
        print("Birthdate")
        print(Birthdates)
