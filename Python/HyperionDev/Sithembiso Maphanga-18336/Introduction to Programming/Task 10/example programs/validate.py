
num_str = input("Enter a number: ")
if num_str == "2":
    num_int = int(num_str)
    #string input was cast to int (tested with print numInt*2 function)
elif num_str == "3":
     num_int = int(num_str)
     #string input was cast to int (tested with print numInt*2 function)
elif num_str == "NO":
    print ("No can't be cast to an int.")
    #entering NO caused the print function to be executed.
    
#Entering anything other than 2, 3 or NO did not result in any output as the option was not defined in the code.
#Use else function to create output for other inputs.

