package com.company.JavaClasses;

//The meaning of Encapsulation, is to make sure that "sensitive" data is hidden from users. To achieve this, you must:
//declare class variables/attributes as private
//provide public get and set methods to access and update the value of a private variable
//we use the getName() and setName() methods to access and update the variable:
public class Encapsulation {
    private String name = new String();
    private String surname = new String();



    //    Constructor of the class does some work on the attribute
    public Encapsulation(String surname) {
        this.surname = surname;
        setName();
    }


    public static void main(String[] args) {
        Encapsulation myclass = new Encapsulation("Maphanga");
        System.out.println(myclass.getFName());
    }

//    Setter of name variable
    public void setName(){
        this.name = "Sithembiso";
    }

    public  String getFName(){
        return "Hello "+this.name+" "+this.surname;
    }
}
