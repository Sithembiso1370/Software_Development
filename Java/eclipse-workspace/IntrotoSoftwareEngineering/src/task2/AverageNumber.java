package task2;


import java.util.Scanner;

// TODO : 1 Create a new file called averageNumber.java
public class AverageNumber {
//    TODO : 2 Write a program that determines how many positive and negative
//integers have been entered and calculates the total and average of all the
//entered numbers

//    TODO : 3 Firstly, ask the user to enter any number of integers. The user should enter
//0 to indicate the end of their input.

//    TODO : 4 Firstly, ask the user to enter any number of integers. The user should enter
//0 to indicate the end of their input.


//    TODO : 5 The total of all integers entered as well as the average should then be
//calculated and displayed.
    public  static  void main(String[] args){
        Integer Count_inputs = 0;
        Integer repeat = 0;
        int sum_inputs = 0;

        while (repeat == 0){

            System.out.print("Enter a number \n");
            Scanner s = new Scanner(System.in);

            Integer user_int = Integer.valueOf(s.nextLine());
            sum_inputs += user_int;
            Count_inputs += 1;

//            to t
//
//
//
//            Terminate asking for number
            if (user_int == 0){
                Count_inputs -= 1;
                repeat = 1;
            }
        }

//        System.out.println("sum of inputs = "+sum_inputs);
//        System.out.println("count of inputs = "+Count_inputs);
        System.out.println("average of these "+Count_inputs+" inputs = "+sum_inputs/Count_inputs);


    }

}
