package Task5;

import java.util.Scanner;

public class WhatDoesThisAppDo {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		final int NUMBER = 5;
		
		int int2 = 0; 
		int int1 = 0; 
		long startTime = System.currentTimeMillis();
		
		String string1 = " "; 
		Scanner string2 = new Scanner(System.in);
		
		while (int1 < NUMBER) {
			int number1 = (int)(Math.random() * 10);
			int number2 = (int)(Math.random() * 10);
			if (number1 < number2) {
			int temp = number1; number1 = number2; number2 = temp;
		}
			
			
		System.out.print("What is " + number1 + " - " + number2 + "? ");
		
		int answer = string2.nextInt();
		
		if (number1 - number2 == answer) { System.out.println("You are correct!");
			int2++; // Increase the correct answer count
		}
		else
			System.out.println("Your answer is wrong.\n" + number1
			+ " - " + number2 + " should be " + (number1 - number2));
			int1++;
			string1 += "\n" + number1 + "-" + number2 + "=" + answer +
			((number1 - number2 == answer) ? " correct" : " wrong");
		}
		
		long endTime = System.currentTimeMillis();
		long testTime = endTime - startTime;
		
		System.out.println("Correct count is " + int2 +
		"\nTest time is " + testTime / 1000 + " seconds\n" + string1);
	}

}

//  TODO 1 : Firstly, without running the program, determine what the above code
//does. Write your answer in a text file called answers.txt.

// TODO 2 : What is the output of this programme? (Provide your own input data if
//necessary) Write your answer in the answers.txt file.

