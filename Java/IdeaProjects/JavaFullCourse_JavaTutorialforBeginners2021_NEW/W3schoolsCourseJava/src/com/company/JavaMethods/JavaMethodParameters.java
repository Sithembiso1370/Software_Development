package com.company.JavaMethods;


//Parameters and Arguments
//Information can be passed to methods as parameter. Parameters act as variables inside the method.
//Parameters are specified after the method name, inside the parentheses. You can add as many parameters as you want, just separate them with a comma.
//The following example has a method that takes a String called fname as parameter. When the method is called, we pass along a first name, which is used inside the method to print the full name:
public class JavaMethodParameters {

    public static void main(String[] args) {
        myMethod("Liam");
        myMethod("Jenny");
        myMethod2("Anja",22);
        System.out.println(myReturnMethod(5));
    }

//    SINGLE PARAMETER
    static void myMethod(String fname) {
        System.out.println(fname + " Maphanga");
    }

//    MULTIPLE PARAMETERS
    static void myMethod2(String fname, int age) {
        System.out.println(fname + " is " + age);
    }

    //    Return Values
    //The void keyword, used in the examples above, indicates that the method should not return a value. If you want the method to return a value,
    // you can use a primitive data type (such as int, char, etc.) instead of void, and use the return keyword inside the method:
    static int myReturnMethod(int x) {
        return 5 + x;
    }


}
