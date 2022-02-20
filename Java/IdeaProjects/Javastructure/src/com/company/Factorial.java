package com.company;


import java.util.Scanner;

//   TODO : Create a new file called factorial.java
//TODO :Write a program that determines the factorial of a number entered by a user.
//TODO : Prompt the user to enter a positive integer.
//TODO : Then calculate the factorial of the given number. For any positive integer
//TODO : its factorial is given by:
//TODO : factorial = 1*2*3…*n
//TODO : Finally, print out the factorial.

public class Factorial {


    public  static  void main(String[] args){
        System.out.print("Enter a positive integer");
        Scanner s = new Scanner(System.in);

        Integer user_input = Integer.valueOf(s.nextLine());
        int factorial = 1;

        for (int i = 1; i <= user_input; i++){
            factorial *= i ;
        }

        System.out.println(factorial);

    }
}
