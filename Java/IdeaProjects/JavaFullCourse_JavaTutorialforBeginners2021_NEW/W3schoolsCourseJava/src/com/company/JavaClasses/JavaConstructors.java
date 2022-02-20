package com.company.JavaClasses;

public class JavaConstructors {

    int x;  // Create a class attribute

    // Create a class constructor for the Main class
    public JavaConstructors() {
        x = 5;  // Set the initial value for the class attribute x
    }

    public static void main(String[] args) {
        Main myObj = new Main(); // Create an object of class Main (This will call the constructor)
        System.out.println(myObj.x); // Print the value of x

        new JavaConstructorsWithParams(15);
    }
}

 class JavaConstructorsWithParams {

    int x;  // Create a class attribute

    // Create a class constructor for the Main class
    public JavaConstructorsWithParams(int x_value) {
        this.x = x_value;  // Set the initial value for the class attribute x
    }

    public static void main(String[] args) {
        Main myObj = new Main(); // Create an object of class Main (This will call the constructor)
        System.out.println(myObj.x); // Print the value of x
    }
}
