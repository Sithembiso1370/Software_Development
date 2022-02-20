package com.company.JavaClasses;

public class JavaClassesandObjects {
    int x = 27;

    public static void main(String[] args) {


//        Create an object called "myObj" and print the value of x:
//        A class in Java can create an instance of itself within its body
        JavaClassesandObjects myObj = new JavaClassesandObjects();
        Main myOtherObj = new Main();
        System.out.println(myObj.x);
        System.out.println(myOtherObj.x);
        System.out.println(myOtherObj.fullname());
    }
}

class Main {
    public String x = "Sithembiso";


    String fullname(){
        return this.x + " Maphanga";
    }

}

