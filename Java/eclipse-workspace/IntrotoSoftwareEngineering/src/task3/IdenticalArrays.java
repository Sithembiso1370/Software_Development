package task3;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;
//import task3.Grades;

public class IdenticalArrays {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		int[] array1 = task3.Grades.getUserArray(5);
		int[] array2 = task3.Grades.getUserArray(5);
		int num_equalValues = 0;
		
		
		
		for(int i = 0; i < array1.length; i++) {
			if(array1[i] == array2[i]) {
				num_equalValues += 1;
			}
		}
		
		
		if(num_equalValues == array1.length  && num_equalValues == array2.length) {
			System.out.println("The arrays are equal");
		}
		else {
			System.out.println("The arrays are NOT equal");
		}
		
	}
	
	
	
	
    public static List<Integer> getUserListArray(){

        
    	List<Integer> values = new ArrayList<Integer>();
    	Scanner in = new Scanner(System.in);
    	int value;
    	int numValues = 0;
    	do {
    	    value = in.nextInt();
    	    values.add(value);
    	} while (value >= 1 && value <= 100); {
//    		System.out.print("Enter Another Number :");
    	    value = in.nextInt();
    	    values.add(value);

    	};
        
        return values;
    }

}
