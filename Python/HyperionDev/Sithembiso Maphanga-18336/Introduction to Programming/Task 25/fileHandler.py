# Defining functions to read and write from files

# function to write a line to a file - takes in a single string to write to a file
def write2file(filaname,string2write):
    with open(filaname, 'w') as ofile:
        # writing each line of the list into the new page all_numbers.txt
        if(ofile.write(string2write+"\n")):
            return 1
        else:
            return 0


# function to write a line to a file2 - takes in multiple strings to write to a chosen file
def addline2file(filaname,string2write):
    # storing the list items of the current file lines into a variable
    currentlines_list = []
    with open(filaname, 'r+') as f:
        # looping through each line of data in the page numbers1.txt and appending to lines_list
        for line in f:
            # appending to lines_list
            currentlines_list.append(line)
    currentlines_list.append(string2write)
    lines_in_list = len(currentlines_list)
    lines_written = 0
    with open(filaname, 'w') as ofile:
        for string2w in currentlines_list:
            if (ofile.write(string2w+"\n")):
                lines_written += 1
        # print(lines_in_list)
        # print(lines_written)

    if lines_in_list == lines_written:
        return 1
    else:
        return 0
# print(addline2file("test2write2file.txt","string"))

# function to read the whole file - reads everything within the chose file
# and returns a list of file contents
# on each line of the file being read
def readwholefile(filaname):
    lines_list = []
    with open(filaname, 'r+') as f:
        # looping through each line of data in the page numbers1.txt and appending to lines_list
        for line in f:
            # appending to lines_list
            lines_list.append(line)
        return lines_list
# print(readwholefile("test2write2file.txt"))
# function to read a line from a file - returns a chosen line for the file being read
# users feeds the file name parameter and line number to return
def readlinefile(filaname,line_no):
    lines_list = []
    with open(filaname, 'r+') as f:
        # looping through each line of data in the page numbers1.txt and appending to lines_list
        for line in f:
            # appending to lines_list
            lines_list.append(line)
    return lines_list[line_no-1]


# print(readwholefile("tasks.txt"))

# function to write a line to a file2 - takes in multiple strings to write to a chosen file
def UpdateLineInfile(filaname,string2write,line_number,old_word,index):
    # storing the list items of the current file lines into a variable
    currentlines_list = []
    with open(filaname, 'r+') as f:
        # looping through each line of data in the page numbers1.txt and appending to lines_list
        for line in f:
            # appending to lines_list
            currentlines_list.append(line)
    # Change the current old value in the line supplied at the specific index
    # new_line = currentlines_list[line_number-1].replace(old_word,string2write)+ '\n'
    # or
    new_line2 = currentlines_list[line_number-1].replace(currentlines_list[line_number-1].split(',')[index],string2write)
    lines_in_list = len(currentlines_list)
    lines_modified = 0
    with open(filaname, 'w') as ofile:
        count = 0
        for i in currentlines_list:
            if count == line_number-1:
                if (ofile.write(new_line2+'\n')):
                    lines_modified += 1
            else:
                if (ofile.write(i)):
                    lines_modified += 1
            count += 1


    if lines_in_list == lines_modified:
        return f" Update for line {line_number} from {currentlines_list[line_number-1].split(',')[index]} to {string2write} succesfull"
    else:
        return f"Sorry.. Update for line {line_number} from {currentlines_list[line_number-1].split(',')[index]} to {string2write} Unsuccesfull check possible errors"

# print(UpdateLineInfile("tasktests.txt", "No", 8, "old_word"))