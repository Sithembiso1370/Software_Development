package task3;

import java.util.Scanner;

public class Grades {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int sum = 0;
		int average= 0;
		
		int[] myTestResults = getUserArray(5);
		
		
		for(int i = 0; i < myTestResults.length; i++) {
			sum += myTestResults[i];
		}
//		System.out.println("SUM = " +sum);
		average = sum/5;
//		System.out.println("AVERAGE = " +average); 
		
		
		System.out.println("Student percentage = "+giveStudentPercent(average));
		

	}
	
    public static int[] getUserArray(int num_valuez){
        Scanner s = new Scanner(System.in);
        int num_values = num_valuez;


        int [] myArray = new int[num_values];


        Scanner input = new Scanner(System.in);
        System.out.print("Please enter " + myArray.length+" values");
        for (int i = 0; i < myArray.length; i++) {
        	if(i != 0) {
        		System.out.print("Enter Another Number :");
        	}
        	else if(i == myArray.length-2) {
        		System.out.print("Enter The Last Number :");
        	}
            myArray[i] = input.nextInt();
        }

        return myArray;
    }
    
    
    
    public static char giveStudentPercent(int average) {
    	int student_average = average;
    	char returnedValue = 'x';

    	if(student_average <= 49) {
    		returnedValue = 'F';
    	}
    	else if(student_average >= 50 && student_average <= 59) {
    		returnedValue = 'D';
    	}
    	else if(student_average >= 60 && student_average <= 69) {
    		returnedValue = 'C';
    	}
    	else if(student_average >= 70 && student_average <= 79) {
    		returnedValue = 'B';
    	}
    	else if(student_average >= 80 && student_average <= 100) {
    		returnedValue = 'A';
    	}
    	return returnedValue;
    }
	
	
	

}
