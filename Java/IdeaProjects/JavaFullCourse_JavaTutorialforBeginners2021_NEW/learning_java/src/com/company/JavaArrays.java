package com.company;

public class JavaArrays {

    public static void main(String[] args) {


//        Integer Arrays
        int [] int_array = {2,3,5};
//        System.out.println(int_array[int_array.length-1]);

        //String Arrays
        String [] string_array = {"2","3","5"};
//        System.out.println(int_array[string_array.length-1]);

        //Double Arrays
        Double [] Double_array = {2.788,3.0988,4.6778};
//        System.out.println(Double_array);

//        Normal for Loop
        for ( int i = 0; i < int_array.length; i++){
            System.out.println(int_array[i]);
        }

//        Advanced for loop
        for (String my_array: string_array){
            System.out.println(my_array);
        }
    }
}
