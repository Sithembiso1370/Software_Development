import java.util.ArrayList;
import java.util.Collections; 
import java.util.Iterator;

public class myExample {

	public static void main(String[] args) {
	    ArrayList<String> cars = new ArrayList<String>();
	    cars.add("Volvo");
	    cars.add("BMW");
	    cars.add("Ford");
	    cars.add("Mazda");
	    
	    //Get the size of the arrayList
        System.out.println("Size: " + cars.size());	   
	    
        System.out.println("Items in arrayList: " );
	    for (String i : cars) {
	      System.out.println(i);
	    }
	    
	    Collections.sort(cars);  // Sort cars
	     
	    System.out.print("List after sorting: " );
	    Iterator<String> iterate = cars.iterator();
        // Use methods of Iterator to access elements
        while(iterate.hasNext()){
            System.out.print(iterate.next());
            System.out.print(", ");
        }
        
        System.out.println();
        
        if (!cars.contains("Toyota")) {
        cars.add(2, "Toyota");
        }
        System.out.println("List after if statement: " + cars);
        
        Collections.reverse(cars); //Reverse ArrayList
        System.out.println("List after reversing: " + cars);

	}

}
