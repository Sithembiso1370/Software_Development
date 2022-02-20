package com.company;

import java.time.LocalDate;
import java.util.Locale;

public class ReferenceTypes {

    public static void main(String[] args) {

        //    None Primitive data types AKA reference types
       // Variables that refer to some other item for their value

//        eg
        String name = new String("Sthera Codes.");
        System.out.println(name.toUpperCase(Locale.ROOT));

        LocalDate now = LocalDate.now();
        System.out.println(now.getMonth());


    }
}
