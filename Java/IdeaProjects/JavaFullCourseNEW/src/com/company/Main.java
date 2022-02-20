package com.company;

import java.util.Arrays;

public class Main {

    public static void main(String[] args) {
	// write your code here
        System.out.println("working...");
//        System.out.println(ret_num(5));
        int[] my_array = ret_int_array(5);

        int counter = 10;

        for (int x = 0; x < counter; x++){

            System.out.println(Arrays.toString(my_array));
        }



    }

    public static int ret_num(int n){
        return n*3 ;
    }

    public static int[] ret_int_array(int n){
        return new int[n];
    }

    public static String[] ret_string_array(int n){
        return new String[n];
    }

}
