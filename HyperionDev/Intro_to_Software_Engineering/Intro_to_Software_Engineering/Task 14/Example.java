import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;

// ================ File Input =================

class ScannerExample {

    public static void main(String args[]) throws FileNotFoundException {
  
        //Creating File instance to reference text file in Java
        File text = new File("test.txt");
      
        //Creating Scanner instnace to read File in Java
        Scanner scnr = new Scanner(text);
      
        //Reading each line of file using Scanner class
        int lineNumber = 1;
        while(scnr.hasNextLine()){
            String line = scnr.nextLine();
            System.out.println("line " + lineNumber + " :" + line);
            lineNumber++;
        }       
    }   
}

// ================ File Output =================

import java.util.Formatter;
import java.util.Locale;

class FormatterDemo {
	
	public static void main(String[ ] args) {
	   
		// create a new formatter
		try {
		Formatter f = new Formatter("outputTest.txt");
		
		// print the formatted strings to the file
		f.format("%s %s %s", "1","John", "Smith \r\n");
		f.format("%s %s %s", "2","Amy", "Brown");
		f.close();    
		} 
  
		catch (Exception e) {
			System.out.println("Error");
		}
	}
}
