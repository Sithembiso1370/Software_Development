public class Errors
{

	public static void main (String[] args)
	{
	
		System.out.println("Welcome to my first program!\n")
		
		String ageStr = "24 years";
      
		int age = Integer.parseInt(ageStr);
		
		System.out.println("I'm " + age + " years old.");
      
		int three = "3";
      
	   int answerYears = age + three;
		
		System.out.println("Total number of years: " + answerYears);
		
		int answerMonths = answerYears * 12; 
		
		System.out.println("In 3 years and 6 months, I'll be " + answerMonths + " months old");
		
		//Once you've corrected all the errors, the answer should be 330.
	}

}


