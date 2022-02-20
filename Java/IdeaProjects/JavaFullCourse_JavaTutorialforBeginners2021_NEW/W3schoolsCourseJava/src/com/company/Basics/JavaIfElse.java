package com.company.Basics;


/**
 * Java Conditions and If Statements
 * Java supports the usual logical conditions from mathematics:
 *
 * Less than: a < b
 * Less than or equal to: a <= b
 * Greater than: a > b
 * Greater than or equal to: a >= b
 * Equal to a == b
 * Not Equal to: a != b
 * */
public class JavaIfElse {

    public static void main(String[] args) {

//        Note that if is in lowercase letters. Uppercase letters (If or IF) will generate an error.
        if (20 > 18) {
            System.out.println("20 is greater than 18");
        }

//        We can also test variables:
        int x = 20;
        int y = 18;
        if (x > y) {
            System.out.println("x is greater than y");
        }


//        Use the else statement to specify a block of code to be executed if the condition is false. Syntax
//        Short Hand If...Else (Ternary Operator)
//        There is also a short-hand if else, which is known as the ternary operator because it consists of three operands.
//        It can be used to replace multiple lines of code with a single line.
//        It is often used to replace simple if else statements:
//        Syntax   ->  variable = (condition) ? expressionTrue :  expressionFalse;

//        Instead of writing:
        int time = 20;
        if (time < 18) {
            System.out.println("Good day.");
        } else {
            System.out.println("Good evening.");
        }

//        You can simply write: Ternary Operator
        String result = (time < 18) ? "Good day." : "Good evening.";
        System.out.println(result);
    }
}
