package task4;

import java.util.ArrayList;
import java.util.List;

public class NoDups {

	
//	 TODO : Create a new file called NoDups.java

	public static void main(String[] args) {
		// TODO Auto-generated method stub
//		System.out.println(removeArrdups()[0]);
		
		int[] arr ={2,4,5,6,7,8,9,4,12,88,6,9};
//		indexes to remove
		List<Integer> indexesToRemove = new ArrayList<Integer>();
		
		
		
		

		
		for(int i = 0; i < arr.length;i++) {
			
			for(int z = 0; z < arr.length;z++) {
				if( i != z && arr[i] == arr[z] && i < z) {
					indexesToRemove.add(i);
				}
			}
		}
		

//		System.out.println(removeTheElement(arr, indexesToRemove.));
//		System.out.println(indexesToRemove.toArray()[0]);
		int[] newArr = new int[arr.length - indexesToRemove.size()];
		
		for(int i = 0; i < arr.length;i++) {
			int index2remove = (int) indexesToRemove.toArray()[i];
			if(i == index2remove) {
				System.out.println(indexesToRemove.toArray()[i]);
			}
			else {
				
			}
		}
		


	}
	
//	//   TODO : Create a method that takes an integer array argument and removes all duplicates from the array
	public static int[] removeArrdups() {
		int[] arr={5,6,7,8,9};
		return arr;
	}
	
	
	
    // Function to remove the element
    public static int[] removeTheElement(int[] arr, int index)
    {
 
        // If the array is empty
        // or the index is not in array range
        // return the original array
        if (arr == null || index < 0
            || index >= arr.length) {
 
            return arr;
        }
 
        // Create another array of size one less
        int[] anotherArray = new int[arr.length - 1];
 
        // Copy the elements except the index
        // from original array to the other array
        for (int i = 0, k = 0; i < arr.length; i++) {
 
            // if the index is
            // the removal element index
            if (i == index) {
                continue;
            }
 
            // if the index is not
            // the removal element index
            anotherArray[k++] = arr[i];
        }
 
        // return the resultant array
        return anotherArray;
    }
 

}
