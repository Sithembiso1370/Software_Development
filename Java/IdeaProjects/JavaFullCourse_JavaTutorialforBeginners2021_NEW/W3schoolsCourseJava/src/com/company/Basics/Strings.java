package com.company.Basics;


//  Strings are used for storing text.
//  A String variable contains a collection of characters surrounded by double quotes:
public class Strings {

    public static void main(String[] args) {

        String greeting = "Hello";

//        A String in Java is actually an object, which contain methods that can perform certain operations on strings.
//        For example, the length of a string can be found with the length() method:
        String txt = "ABCDEFGHlocateRSTUVWXYZ";
        System.out.println("The length of the txt string is: " + txt.length());

        String txtZ = "Hello World";
        System.out.println(txtZ.toUpperCase());   // Outputs "HELLO WORLD"
        System.out.println(txtZ.toLowerCase());   // Outputs "hello world"

//        The indexOf() method returns the index (the position) of the first occurrence of a specified text in
//        a string (including whitespace):
        System.out.println(txt.indexOf("locate"));

//        The + operator can be used between strings to combine them. This is called concatenation
        String firstName = "John";
        String lastName = "Doe";
        System.out.println(firstName + " " + lastName);
//        You can also use the concat() method to concatenate two strings:
        System.out.println(firstName.concat(" "+lastName));

//        Escape character
//        \'	'
//        \"	"
//        \\	\
//        e.g
        txt = "We are the so-called \"Vikings\" from the north.";
        System.out.println(txt);
    }
}
