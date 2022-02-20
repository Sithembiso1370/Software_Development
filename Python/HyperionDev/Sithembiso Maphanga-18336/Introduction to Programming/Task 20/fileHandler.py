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
def write2file2(filaname,string2write):
    with open(filaname, 'w') as ofile:
        # writing each line of the list into the new page all_numbers.txt
        ofile.write(string2write[0] + ',' + string2write[1] + "\n")
        return "file written"


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