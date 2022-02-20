package com.company;

import java.time.LocalDate;
import java.util.Date;

public class Datez {

    public static void main(String[] args) {
        Date my_date = new Date();
        LocalDate my_localdate = LocalDate.now();


        System.out.println(my_date.toString());
        System.out.println("my_localdate = "+my_localdate);
        System.out.println("my_localdate.getMonth() = "+my_localdate.getMonth());

        System.out.println("my_localdate.getDayOfYear() = "+my_localdate.getDayOfYear());
        System.out.println(my_date.getDate());
    }
}
