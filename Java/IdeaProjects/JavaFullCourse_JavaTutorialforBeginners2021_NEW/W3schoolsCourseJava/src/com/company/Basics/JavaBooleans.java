package com.company.Basics;


/**
 * Very often, in programming, you will need a data type that can only have one of two values, like:
 *
 * YES / NO
 * ON / OFF
 * TRUE / FALSE
 * */
public class JavaBooleans {

    public static void main(String[] args) {
//        A boolean type is declared with the boolean keyword and can only take the values true or false:

        boolean isJavaFun = true;
        boolean isFishTasty = false;
        System.out.println(isJavaFun);     // Outputs true
        System.out.println(isFishTasty);   // Outputs false

//        However, it is more common to return boolean values from boolean expressions, for conditional testing (see below).
        int x = 10;
        int y = 9;
        System.out.println(x > y); // returns true, because 10 is higher than 9

//        In the examples below, we use the equal to (==) operator to evaluate an expression:
        System.out.println(x == 10);
    }
}
