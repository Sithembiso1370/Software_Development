package com.example.headfirstbeeradviser;

import java.util.ArrayList;
import java.util.List;

public class BeerExpert {

//    TODO : CREATE A LIST OF STRINGS  FROM THE COLOR PASSED INTO THE getBrands function
    List<String> getBrands(String color) {

//        TODO : CREATE AN EMPTY ARRAY LIST TO HOLD BRANDS RETURNED BY THE SWITCH STATEMENT
        List<String> brands = new ArrayList<>();
        switch (color) {
//            TODO : IF THE COLOR IS THIS:
            case "amber":
//                TODO : ADD THE BELOW COLORS TO THE BRANDS ARRAYLIST
                brands.add("Jack Amber");
                brands.add("Red Moose");
                break;
            case "Sithembiso":
                brands.add("Sthera Maphanga");
                brands.add("Age : 27");
                break;
            case "Khabonina":
                brands.add("Khabonina Simone Ngwenya");
                brands.add("Age : 23");
                break;
            default:
                brands.add("Jail Pale Ale");
                brands.add("Gout Stout");
                break;
        }
//        TODO : FINALLY RETURN THE ARRAY LIST FORMED FROM THE COLOR INPUTED
        return brands;
    }
}


