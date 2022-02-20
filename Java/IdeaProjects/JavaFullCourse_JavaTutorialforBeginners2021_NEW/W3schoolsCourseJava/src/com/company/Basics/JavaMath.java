package com.company.Basics;

import java.awt.*;

public class JavaMath {

    public static void main(String[] args) {
//        The Java Math class has many methods that allows you to perform mathematical tasks on numbers.

//        The Math.max(x,y) method can be used to find the highest value of x and y:

        System.out.println(Math.max(5, 10));
//        The Math.min(x,y) method can be used to find the lowest value of x and y:
        System.out.println(Math.min(5, 10));
//        The Math.sqrt(x) method returns the square root of x:
        System.out.println(Math.sqrt(64));
//        The Math.abs(x) method returns the absolute (positive) value of x:
        System.out.println(Math.abs(-4.7));

//        Math.random() returns a random number between 0.0 (inclusive), and 1.0 (exclusive):
//        To get more control over the random number, e.g. you only want a random number between 0 and 100, you can use the following formula:
        System.out.println((int)(Math.random() * 101));
    }
}
