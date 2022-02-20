# Create a new Python file in this folder called combined.py

# Create a text file called numbers1.txt that contains Integers which are
# sorted from smallest to largest.

# Create another text file called numbers2.txt which also contains Integers
# that are sorted from smallest to largest.

# Write the numbers from both files to a third file called all_numbers.txt
# with open('numbers2.txt', 'r+') as g:
#
#         for line in g:
#             print(line)
#         with open('numbers1.txt', 'r+') as f:
#             for line in f:
#                 print(line)

my_file1 = open('numbers1.txt', 'r+')
my_file2 = open('numbers2.txt', 'r+')

file_contents = ''
file_contents2 = ''
file_contents_all = []
lines_list = []

# fetching each line of  data from numbers1.txt and instantly convert to integer for future ordering
with my_file1 as f:
    # looping through each line of data in the page numbers1.txt and appending to lines_list
    for line in f:
        # appending to lines_list
        lines_list.append(int(line))

# fetching each line of  data from numbers2.txt and instantly convert to integer for future ordering
with my_file2 as g:
    # looping through each line of data in the page numbers1.txt and appending to lines_list
    for line in g:
        # appending to lines_list
        lines_list.append(int(line))

# storing the sorted file contents from both pages above to a list
file_contents_all = sorted(lines_list)

# opening the file all_numbers.txt and looping through each list item
# in the above ordered list of collected items from the numbers1 and numbers2 pages
# and storing each list item as a new line item  in the new page all_numbers.txt
with open('all_numbers.txt', 'w') as ofile:
    # loop through sorted list items
    for looping in  file_contents_all:
            # writing each line of the list into the new page all_numbers.txt
            ofile.write(str(looping) + "\n")

print("numbers saved !!")


def write2file(filaname,string2write):
    with open(filaname, 'w') as ofile:
        # writing each line of the list into the new page all_numbers.txt
        ofile.write(string2write + "\n")

def readwholefile(filaname):
    with open(filaname, 'w') as ofile:
        return ofile