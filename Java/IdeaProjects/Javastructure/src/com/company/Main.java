package com.company;

import java.util.Scanner;

//    Pascal Naming convention
//    The First word in every Class is upper case
public class Main {

    //    Camel Naming convention
    //    The First word in every function is lower case
    public static void main(String[] args) {
    //        Create an integer variable
        int age = 28;
        String brand = "Sthe's Code";
        double mydouble = 7;
        byte mybyte = -128;
        short myshort = 8988;
        char mychar = 'r';
        long mylong= 73383938993993L;


//        Request user to enter input
        System.out.print("Enter your name : ");

//      Create an input scanner Object instantiate it - Input handler Object
        Scanner s = new Scanner(System.in);

//        Store the line read in a string
        String user_str = s.nextLine();

	    // write your code here
//        Use System.out to print the parameters passed to the println() function of the class System.out to
//        The standard output device
        System.out.println("Hello World "+age +" "+user_str);
        System.out.println(brand);
        System.out.println(mydouble);
        System.out.println(mybyte);
        System.out.println(myshort);
        System.out.println(mylong);
        System.out.println(mychar);

//        String answer = "Y";

//        Practicing Java while loop for the first time
        while (age > 10){
            // write your code here
//        Use System.out to print the parameters passed to the println() function of the class System.out to
//        The standard output device
            System.out.println(age);
            age -= 1;
        }
    }
}
