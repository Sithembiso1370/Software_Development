
#========= Data types ===========


# You get different TYPES of variables : strings, integers(ints) and floats. These different types are known as DATA TYPES.
# Ints store integers (i.e. whole numbers). 
# Strings store text and you always use " " to denote strings. Do not use ' ' . Strings can have spaces in them. 
# Floats store real numbers (i.e. numbers with decimal points) so numbers such as 1.234. 


a_string_variable = "ABC"
an_int_variable = 2


# How does Python detect the data type? 
# Well there are certain patterns like strings having double or single quotation marks,
# integers just being numbers or a certain format and floating point types having decimal places.


text = "Welcome"  
number = 10
number_str = "10"


# Python detects 'text' as a string because the content being set ("Welcome"), is a string with double quotation marks.
# Similarly Python detects number as a number type (int or integer to be precise) as it falls in a pattern of having numbers only and no other characters.
# numberStr is detected as a string because of the quotation marks.


# Heed that 10 is not the same as "10", they are two different types, thus before you can use them, you need to type 'cast' them which we will cover later.
# When writing programs, you'll have to decide what data types or variables you will need to do what you want your program to do.
# In most cases, it will be pretty obvious - want to store someone's name? Use a String. Their age? Use an integer. 


# Let's look at some examples.
# I want to multiply three numbers together:


num1 = 2
num2 = 10
num3 = 20


result = num1 * num2 * num3


# Now I want to make a message to display the result.
# The message will have to be stored in a String variable, since it will contain text:


message = "The result of multiplying 2, 10 and 20 is {}.".format(result)


# The variable message now stores a String which contains the message.
# We use the function str(result) to convert the VALUE of result (which is an integer) to a String data type.
# This is known as type casting. We cast result to a String.


# Take a look at what message contains:


print(message)



