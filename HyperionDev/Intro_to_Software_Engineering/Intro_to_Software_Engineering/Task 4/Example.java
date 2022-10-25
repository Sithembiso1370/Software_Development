import java.util.Arrays; // Importing the class Arrays from the java.util package, this will be explained in the course of this task
// The above line must come before the class declaration

public class Example // class declaration 
{

	public static void main(String[] args)  // main method declaration
	{
		/*  Hey, great work making it this far.
			In this task you'll learn more about methods. Notice the word "more" in the previous sentence,
			it's there because we have already begun to use methods. 
			
			A method is a set of instructions that are performed in order to achieve a specific goal, 
			that way multiple instructions can be executed by just writting one instruction. 
			
		 	====================== STATIC METHODS ========================
		*/
		
		System.out.println("====================== STATIC METHODS =========================");
	
		/*  static int abs(int a) 
		
			- static: This method is static meaning it must be called directly from the class. The word static is a modifier;
			- int: This method will return an int value
			- abs: The name of the method 
			- int: The parameter of the method, this method only receives one int value.
			- a: This is the name of the only parameter of the method, the int value. This name doesn't really concern us except
			for the description part. All we have to know is the type of the parameter.
			
			Description:
			
			This method returns the absolute value of a. It belongs to the Math class in the java.lang package.
		*/
		
		System.out.println("Using the abs method from the Math class");
		
		Math.abs(-1); 
		
		/*  The method belongs to the Math class so to call the method we have to specify its class. After the class
			we add a dot '.' followed by the name of the method and the arguments we want to pass to it. In this case
			we want to calculate the absolute value of -1. This method only calculates and returns the absolute of the value passed
			to it. When a value is returned we can choose if we want to do something or not with it. Since we did nothing
			with that value and this method does not print anything for itself it looks like the last statement does absolutely
			nothing even though in the background it performed the required operation.
		*/
		
		System.out.println(Math.abs(-2));
		
		/* Now we called the method and printed the number it returns. Return methods can be dealt with exactly 
		   the same way their return type is dealt with. This method returns an int value so it can be treated exactly like
		   we treat normal int values or variables. Just keep in mind that the value discussed here in not the argument but
		   the return of the method.
		*/
		
		int number1 = -3;
		
		int number2 = 3;
		
		System.out.println( "The absolute value of " + number1 + " is " + Math.abs(number1) );
	
		System.out.println( "The absolute value of " + number2 + " is " + Math.abs(number2) );
		
		number2 = Math.abs(number1) + number1;
		// Rememver, when we call this method it returns an int value so we can treat it as a normal int value;
		
		System.out.println( "number2 is now " + number2 + " and its absolute value is " + Math.abs(number2) );
		
		number2 = Math.abs(number1)-1; // Changing the value of number2 again
		
		System.out.println( "After all those operations number2 is still " + number2 + " and number1 is still " + number1 );
		
		System.out.println();
		
		/* static double pow(double a, double b)
		
		   - static: This method is static, it must be called directly from its class;
		   - double: This method returns a value of type value double;
		   - pow: The name of the method;
		   - double a, double b: The types of the arguments the method receives.
		   
		   Description:
		   
		   The method returns the result of a to the power of b. Just like the abs method, it belongs to the Math class.
		*/

		System.out.println("Using the pow method from the Math class");
		
		int pow = (int)Math.pow(number1, number2);
		/* This method returns a dobule value but we want to cast it to int.
		   We know that this method receives two double values but since int fits into double we can pass two int values 
		   and Java will do the conversion and the method will still operate with double values.
		*/
		
		System.out.println( number1 + " to the power of " + number2 + " is " + pow );
		
		System.out.println();
		
		
		/* static String toString(int[] a)
		
		   - String: this method returns a String
		   
		   The explanations of the other words can be seen in the previous methods explanations.
		   
		   Description:
		   
		   This method receives an int array and returns its String representaion.
		*/
		
		System.out.println("Using the toString method from the class Arrays");
		
		int[] numbers = new int[5];
		
		System.out.println( "String representation of numbers array: " + Arrays.toString(numbers) );
		
		// Assigning the first three positions of the numbers array with the variables used before. 
		
		numbers[0] = number1;
		
		numbers[1] = number2;
		
		numbers[2] = pow;
		
		System.out.println( "After assigning the representation of numbers array is: " + Arrays.toString(numbers) );
		
		/* One thing that you might have noticed but it's definitely worth reminding is that variables that are passed
		   to methods aren't changed no matter what the method does. When a value is passed to a method, Java automatically
		   copies the variable and doesn't work directly with it. This scenario is only totally true when working 
		   with primitive values like int, double and so on. The rule also applies to String variables. For arrays is 
		   different, arrays are passed by reference what means they can be changed inside methods just like we'll see soon.
		*/
		
		System.out.println();
		
		/* static void fill(int[] a, int value)
		   
		   - void:
		   Description:
		   
		   This method receives an int array and fill all positions with the specified value. It belongs to the class Array
		   from the java.util package. You can see the import statement right at the top of this file.
		*/
		
		System.out.println( "Using the fill method from the Arrays class" );
		
		Arrays.fill(numbers, pow);
		/* This method is only called, no operations can be performed on it, including printing because it doesn't return anything.
		   As mentioned before an array is passed by reference which means it can be changed inside the method unlike primitive
		   and String types.
		*/
		
		System.out.println( "After filling the array numbers with " + pow + ": " + Arrays.toString(numbers) ); 
		
	}
	
}