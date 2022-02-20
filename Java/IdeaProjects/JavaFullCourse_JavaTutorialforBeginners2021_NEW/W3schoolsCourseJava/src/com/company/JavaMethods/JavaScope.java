package com.company.JavaMethods;


//In Java, variables are only accessible inside the region they are created. This is called scope.
public class JavaScope {

    public static void main(String[] args) {
//        Variables declared directly inside a method are available anywhere in the method following the line of code in which they were declared:
        int x = 100;

        // Code here can use x
        System.out.println(x);
//        A block of code refers to all of the code between curly braces {}.
//        Variables declared inside blocks of code are only accessible by the code between the curly braces,
//        which follows the line in which the variable was declared:
    }
}
