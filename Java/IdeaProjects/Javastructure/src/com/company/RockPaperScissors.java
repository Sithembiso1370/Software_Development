package com.company;


// TODO : 1 Create a new file called rockPaperScissors.java

import java.util.Random;
import java.util.Scanner;

// TODO : 2 Write a program that allows the user to play rock, paper, scissors.
public class RockPaperScissors {

    public  static  void main(String[] args){

        // TODO : 3 The program should randomly generate a number (0, 1 or 2), which represents scissors, rock and paper, respectively. (Hint: look uP  Math.random)
//        TODO : NEED TO GENERATE A RANDOM NUMBER HERE
        Random rand = new Random(); //instance of random class
        int upperbound = 2;
        //generate random values from 0-24
        int int_random = rand.nextInt(upperbound);
        Integer number =   int_random;

//        TODO : 4 The program should then prompt the user to enter a number (0, 1 or 2).
        System.out.print("Enter a number between (0, 1 or 2) \n");

        //  TODO  : 5    Create an input scanner Object instantiate it - Input handler Object
        Scanner s = new Scanner(System.in);

//       TODO : 6 Store the line read in a string
//        String user_str = s.nextLine();
        Integer user_str = Integer.valueOf(s.nextLine());


//      TODO : 7  Once the user has entered their number, the program should inform them whether they win, lose or draw
//        TODO : 8 The rules of the game are as follows:
//        [0]scissors
//        [1]rock
//        [2]paper
        System.out.println("comparison = " + number.compareTo(user_str));
//        TODO : 9 Scissors beats paper
        if (user_str.equals(0) && number.equals(2)){
            System.out.println("!!!!!!you WIN !!!!!!! you chose "+user_str+" and the  random numbe is "+ number);
        }
        //        TODO : 10 Rock beats scissors
        else if(user_str.equals(1) && number.equals(0)){
            System.out.println("!!!!!!you WIN !!!!!!! you chose "+user_str+" and the  random numbe is "+ number);
        }
        //        TODO : 11 Paper beats rock
        else if(user_str.equals(2) && number.equals(1)){
            System.out.println("!!!!!!you WIN !!!!!!! you chose "+user_str+" and the  random numbe is "+ number);
        }
        //        TODO : 12 if user inputs random number generated
        else if(user_str.equals(number)){
            System.out.println("wow its actually a draw you chose "+user_str+" and the  random numbe is "+ number);
        }
        else {
            System.out.println("!!!!!!loose !!!!!!! you chose "+user_str+" and the  random numbe is "+ number);
        }
    }

}
