package com.company.JavaClasses;

public class MultipleAttributes {

    //You can specify as many attributes as you want:
    String fname = "John";
    String lname = "Doe";
    int age = 24;

    public static void main(String[] args) {
        MultipleAttributes myObj = new MultipleAttributes();
        System.out.println("Name: " + myObj.fname + " " + myObj.lname);
        System.out.println("Age: " + myObj.age);
    }
}
