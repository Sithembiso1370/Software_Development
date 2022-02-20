package com.company.Basics;

public class JavaTypeCasting {

    public static void main(String[] args) {

//        Widening Casting
//        Widening casting is done automatically when passing a smaller size type to a larger size type:
        int myInt = 9;
        double myDouble = myInt; // Automatic casting: int to double

        System.out.println(myInt);      // Outputs 9
        System.out.println(myDouble);   // Outputs 9.0

//        Narrowing Casting
//        Narrowing casting must be done manually by placing the type in parentheses in front of the value:
         myInt = (int) myDouble; // Manual casting: double to int

        System.out.println(myDouble);   // Outputs 9.78
        System.out.println(myInt);      // Outputs 9

    }
}
