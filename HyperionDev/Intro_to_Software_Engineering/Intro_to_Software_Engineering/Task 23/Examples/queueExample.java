//Example modified from here: https://www.callicoder.com/java-queue/
import java.util.Iterator;
import java.util.LinkedList;
import java.util.Queue;

public class queueExample {
	 static Queue<String> waitingQueue = new LinkedList<>();
	 
	 
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		

		patientArrives("John");
		patientArrives("Brad");
		patientArrives("Angelina");
		patientArrives("Julia");

	    System.out.println("\n=== List all patients waiting to see the doctor ===");
	    Iterator<String> waitingQueueIterator = waitingQueue.iterator();
	    while (waitingQueueIterator.hasNext()) {
	        String name = waitingQueueIterator.next();
	        System.out.println(name);
	    }
	       
	    callNextPatient();
	    patientArrives("Samuel");
	    callNextPatient();
	    callNextPatient();
	    
	}
	
	static void patientArrives(String patientName) {
	 waitingQueue.add(patientName);
	}
	  
	static void callNextPatient() {
	  // Removing an element from the Queue using poll()
	  // The poll() method is similar to remove() except that it returns null if the Queue is empty.
		String name = waitingQueue.poll();
		System.out.println(name + " please go see the doctor. | New WaitingQueue : " + waitingQueue);
	}
}
