package com.company.Basics;


// When you know exactly how many times you want to loop through a block of code, use the for loop instead of a while loop:
//for (statement 1; statement 2; statement 3) {
//  // code block to be executed
//}
public class JavaForLoop {

    public static void main(String[] args) {
//        FOR LOOP
        for (int i = 0; i < 5; i++) {
            System.out.println(i);
        }

//        FOREACH LOOP
//        for (type variableName : arrayName) {
//            // code block to be executed
//        }
        String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};
        for (String i : cars) {
            System.out.println(i);
        }
    }
}
