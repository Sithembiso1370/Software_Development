package com.company;

import java.awt.*;

public class PrimitiveTypes {
    public static void main(String[] args) {

        // Primitive data types
//        The Main difference with reference types is that
//        with reference types the value reference the the referencees value
//        at any point.

        // Java code inside the function is read procedurally
        //  So the Value of b at the end of the function is equal to the value
//        of a at the time be was being initialised into memory
        int a = 10;
        int b = a;
        a = 100;

//        System.out.println("a = "+ a +" And b = "+b);

//        Create an Instance of the Person class
        Person alex = new Person("alex");
        //        Create another Instance of the Person class
        Person ntokozo = new Person("Ntokozo");
        System.out.println(ntokozo);
        System.out.println(ntokozo.name);

    }

//    Need to know what makes static class,object,arrays,variables do in Java
    static  class Person {
//        Declaire an empty string variable holder
        String name;
        String fullname ;



//        Setter function of this function within the class
        Person(String name ){
            this.name = name;
        }
    }

}
