package com.company.JavaClasses;

public class MulitpleObjects {

    int x = 5;

    public static void main(String[] args) {
        MulitpleObjects myObj1 = new MulitpleObjects();  // Object 1
        MulitpleObjects myObj2 = new MulitpleObjects();  // Object 2
        myObj2.x = 25;
        System.out.println(myObj1.x);  // Outputs 5
        System.out.println(myObj2.x);  // Outputs 25
    }
}
