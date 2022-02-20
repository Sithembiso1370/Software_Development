import math


def write_array2file(filaname,array2_write):
    with open(filaname, 'r+') as ofile:
        # writing each line of the list into the new page all_numbers.txt
        for i in array2_write:
            ofile.write(i)
            print(f"file with data {i} written")


def min(a_list):
    for i in range(0,len(a_list)):
        # if this is the first number on the list make it the minimum number
        if i == 0:
            min_num = a_list[i]
        # otherwise check if any other number is less than the number
        # if so make it the minimum number
        elif a_list[i] < min_num:
            min_num = a_list[i]
    return min_num


def _max(a_list):
    for i in range(0, len(a_list)):
        # if this is the first number on the list make it the minimum number
        if i == 0:
            max_num = a_list[i]
        # otherwise check if any other number is greater than the number
        # if so make it the maximum number
        elif a_list[i] < max_num:
            max_num = a_list[i]
    return max_num


def avg(a_list):
    sum = 0
    for num in a_list:
        # add every number on the list to get the sum of all the numbers
        sum += num
    # return the sum of all the numbers devided by lenth of the list of numbers
    return sum/len(a_list)


# Open the file for read and write to automatically close my file
# after i loop through each line on the page lines list
with open("input.txt","r+") as f:
    array2write = []
    # for each line i loop through my array/list of pages lines named f I:
    for line in f:
        # separate the first and 2nd part of the string i extract
        # from string contained in each line i loop through
        st_part = line.split(':')[0]
        nd_part = line.split(':')[1]

        # If the string min  is found on the first part DO:
        if "min" in st_part:
            my_list = []
            for num in nd_part.split(","):
                my_list.append(int(num))
            array2write.append(f"The min of {my_list} is {min(my_list)}\n")
            # If the string MAX  is found on the first part DO:
        elif "max" in st_part:
            my_list = []
            for num in nd_part.split(","):
                my_list.append(int(num))
            array2write.append(f"The max of {my_list} is {max(my_list)}\n")
        # If the string avg  is found on the first part DO:
        elif "avg" in st_part:
            my_list = []
            for num in nd_part.split(","):
                my_list.append(int(num))
            array2write.append(f"The avg of {my_list } is {avg(my_list)}\n")
        # If the string p90  is found on the first part DO:
        elif "p90" in st_part:
            p90 = round(90/100*len([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]))
            array2write.append(f"The 90th percentile of {[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]} is {p90}\n")
        # If the string sum  is found on the first part DO:
        elif "sum" in st_part:
            the_sum = round(math.fsum(my_list))
            array2write.append(f"The sum of {my_list} is {the_sum}\n")
        # If the string p90  is found on the first part DO:
        elif "min" in st_part:
            the_min = min([1, 5, 6, 14, 24])
            array2write.append(f"The min of {[1, 5, 6, 14, 24]} is {the_min}\n")
        # If the string p90  is found on the first part DO:
        elif "max" in st_part:
            the_max = max([2,3,9])
            array2write.append(f"The max of {[2,3,9]} is {the_max}\n")
        # If the string p70  is found on the first part DO:
        elif "p70" in st_part:
            p70 = round(70/100*len([1,2,3]))
            array2write.append(f"The 70th percentile of {[1,2,3]} is {p70}\n")
    write_array2file("output.txt",array2write)





