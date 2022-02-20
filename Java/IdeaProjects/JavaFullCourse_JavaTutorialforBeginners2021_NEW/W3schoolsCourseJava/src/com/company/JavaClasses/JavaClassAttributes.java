package com.company.JavaClasses;


// If you create multiple objects of one class,
// you can change the attribute values in one object, without affecting the attribute values in the other
public class JavaClassAttributes {

    int x = 5;
    int y = 3;

//    If you don't want the ability to override existing values, declare the attribute as final:
    final int z = 10;

    public static void main(String[] args) {
        JavaClassAttributes myclass = new JavaClassAttributes();
        System.out.println(myclass.x+2);

//        myObj.z = 25; // will generate an error: cannot assign a value to a final variable
    }

}
