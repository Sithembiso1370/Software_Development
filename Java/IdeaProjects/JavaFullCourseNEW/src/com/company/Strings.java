package com.company;

public class Strings {

    public static void main(String[] args) {
        // Primitive String
        String my_string0 = "Hello1";

        // Reference Integer
        String my_string = new String("Hello1");

        // Returns true because both reference the same object
        System.out.println(my_string0.equals(my_string));

        //  Returns false because one is a primitive value and the other is a reference object constructor
        System.out.println(my_string0 == my_string);

        System.out.println(my_string.toUpperCase());
        System.out.println(my_string0.toUpperCase());
    }
}
