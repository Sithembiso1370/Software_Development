package com.company.JavaMethods;


//A method is a block of code which only runs when it is called.
//You can pass data, known as parameters, into a method
//Methods are used to perform certain actions, and they are also known as functions.
//Why use methods? To reuse code: define the code once, and use it many times.
public class Methods {

//    myMethod() is the name of the method
//static means that the method belongs to the Main class and not an object of the Main class. You will learn more about objects and how to access methods through objects later in this tutorial.
//void means that this method does not have a return value. You will learn more about return values later in this chapter

    public static void main(String[] args) {
        System.out.println(myMethod());
        System.out.println(myMultipleParams("Sithembiso", "Maphanga" , 27));
    }

    static String myMethod() {
        // code to be executed
        return "hello";
    }

//    The void keyword, used in the examples above, indicates that the method should not return a value.
//    If you want the method to return a value, you can use a primitive data type (such as int, char, etc.) instead of void,
//    and use the return keyword inside the method:
    static String myMultipleParams(String name, String Surname , int age) {
        // code to be executed
        return "hello "+name+" "+Surname+" we see you are now "+age;
    }
}
