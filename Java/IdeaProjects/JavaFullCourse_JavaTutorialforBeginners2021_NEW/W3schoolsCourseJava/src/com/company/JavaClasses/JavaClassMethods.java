package com.company.JavaClasses;

public class JavaClassMethods {

    int x;  // Create a class attribute

    // Create a class constructor for the Main class
    public void Main() {
        this.x = 5;  // Set the initial value for the class attribute x
    }

    // Static method
    static void myStaticMethod() {
        System.out.println("Static methods can be called without creating objects");
    }


    static void myMethod() {
        System.out.println("Hello World!");
    }

    public static void main(String[] args) {
        myMethod();
        JavaClassMethods myCar = new JavaClassMethods();   // Create a myCar object
        myCar.fullThrottle();      // Call the fullThrottle() method
        myCar.speed(200);
        System.out.println(myCar.x);
        myStaticMethod();
    }

    // Create a fullThrottle() method
    public void fullThrottle() {
        System.out.println("The car is going as fast as it can!");
    }

    // Create a speed() method and add a parameter
    public void speed(int maxSpeed) {
        System.out.println("Max speed is: " + maxSpeed);

    }

//    Static vs. Non-Static
//In the example above, we created a static method,
// which means that it can be accessed without creating an object of the class,
// unlike public, which can only be accessed by objects:
}

