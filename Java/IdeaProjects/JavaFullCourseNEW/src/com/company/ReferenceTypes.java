package com.company;

import java.util.Date;
import java.util.Locale;

import static com.company.Main.ret_num;

public class ReferenceTypes {

    public static void main(String[] args) {
        //        Reference types
        Date my_date = new Date();
        System.out.println(my_date.toString());

//
        String name = new String("STHERA CODES");
        System.out.println(name.toLowerCase(Locale.ROOT));

        int[] my_array = new int[6];
        my_array[0] = 6;

        for(int i = 0; i < my_array.length; i++){
            my_array[i] = ret_num(i);
        }


        for(int i = 0; i < my_array.length; i++){
            System.out.println(my_array[i]);
        }

    }
}
