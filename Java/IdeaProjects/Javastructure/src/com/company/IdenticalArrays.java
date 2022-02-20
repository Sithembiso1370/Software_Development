package com.company;

import java.util.Scanner;

public class IdenticalArrays {


    public  static  void main(String[] args){
        int [] array1 = getUserArray();
        int [] array2 = getUserArray();


         System.out.println(array1);
        System.out.println(array2);
    }

    public static int[] getUserArray(){
        System.out.print("How many number do you want to add to your array ?");
        Scanner s = new Scanner(System.in);
        int num_values = Integer.valueOf(s.nextLine());


        int [] myArray = new int[num_values];


        Scanner input = new Scanner(System.in);
        System.out.print("Please enter " + myArray.length + " values");
        for (int i = 0; i < myArray.length; i++) {
            myArray[i] = input.nextInt();
        }

        return myArray;
    }

    public static int returnUserInput(){
        System.out.print("Enter a positive integer");
        Scanner s = new Scanner(System.in);

        Integer user_input = Integer.valueOf(s.nextLine());
        return  user_input;
    }

    public static boolean wannaContinue(){
        System.out.print("Do you want to continue  (1 = Yes and 0 = No) ");
        Scanner s = new Scanner(System.in);

        Integer user_input = Integer.valueOf(s.nextLine());

        if(user_input == 1 ){
            return  true;
        }
        else{
            return false;
        }
    }


}
