package com.company.Basics;


//Loops can execute a block of code as long as a specified condition is reached.
//Loops are handy because they save time, reduce errors, and they make code more readable.

//while (condition) {
//  code block to be executed
//}
public class JavaWhileLoop {
    public static void main(String[] args) {
//        The while loop loops through a block of code as long as a specified condition is true
//        In the example below, the code in the loop will run, over and over again, as long as a variable (i) is less than 5:
        int i = 0;
        while (i < 5) {
            System.out.println(i);
            i++;
//            Note: Do not forget to increase the variable used in the condition, otherwise the loop will never end!

//            The do/while loop is a variant of the while loop. This loop will execute the code block once,
//            before checking if the condition is true, then it will repeat the loop as long as the condition is true.
            do {
                System.out.println(i);
                i++;
            }
            while (i < 5);
        }
    }
}
