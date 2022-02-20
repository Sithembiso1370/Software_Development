def read(filename):
    # y = open(filename,'r')
    #Is your output displaying strange characters when you run this code?
    #You can fix this by specifying the encoding. Do this by passing the encoding
    #argument through to the open method.
    #See the effect of this by commenting out
    #the line of code above this comment and uncommenting the line of code below:
    y = open(filename,'r', encoding='utf-8-sig')

    print(y.readlines())
    y.close()
 
read('example.txt')
 

