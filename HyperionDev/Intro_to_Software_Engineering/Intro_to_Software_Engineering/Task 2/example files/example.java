/*
************* HELP *****************
REMEMBER THAT IF YOU NEED SUPPORT ON ANY ASPECT OF YOUR COURSE SIMPLY LOG IN TO www.hyperiondev.com/support TO: 
START A CHAT WITH YOUR MENTOR, SCHEDULE A CALL OR GET SUPPORT OVER EMAIL.
************************************
*/

/* 
Please do not open this file in the wrong program such as Notepad or Notepad++.
For our Java course, all files should be opened in the program Eclipse. 
  
** Double check that both Eclipse and Java are installed on your computer **
*/

//What you're reading right now is a comment.  Any line with // before it is a comment.

// This is a Java file. It is a normal file with the .java extension on a computer.
 
 
/* A multiline comment can also be inserted using the / and * symbols. 
  
   This is a multiline comment. 
   Comments are messages left in a program that are intended to be read by humans.
   Comments are completely ignored by the computer executing the Java course. 
   They can be inserted absolutely anywhere in a program. 

*/  

/*================================= The General Structure of a Java Program  =================================

	Unfortunately Java isn't the easiest language to jump into. You will need to first memorise the structure of a Java program without fully understanding it.

	All java code must be contained inside a Java class. The java class usually must be named the same as the file its in,
	in this case we're working inside a file named 'Example' so our java class will also be named Example.

*/

import javax.swing.*; //This new line shall be explained towards this end of this task. 

public class example // The class  declaration
 { // Opening brackets to indicate start of the class
 
    public static void main (String [] args) // This is the main method declaration and it must be declared exactly like this.
	{
		System.out.println("Hello World!");
		/* This is a statement, statements must always end with semi colons. 
		   This particular statement prints the message Hello World!!!. The message inside "" is called a String.
		   A String is used to represent text and must always be between ""
		
		The main method is the entry point of a Java program, the execution of the program starts in the main method.
		 
		   A Java program is composed of statements. A statement is an instruction and it must always end with semi colons
		   Notice how the code is carefully lined out and how matching brackets are in line with each other.
		   Keeping your code neat, easily readable and well commented is EXTREMELY important. 
		
		*/ 

	
	//================================= Writing your first Java program  =================================
		
		//============ Statements and Syntax ============
		//A line of code is known as a statement. All statements must have perfect syntax (punctuation and spelling) or your program will not compile and hence not run.
		//All statements in Java, except class declarations, comments and control structures, MUST end in a semicolon (;). Don't forget it!

		//============ Declaring Variables =============
		
		//We store data in placeholders called variables. Here are two declarations of variables:
		  
		  String nameCompany = "Hyperion Development"; //The VARIABLE 'nameCompany' STORES the value "Hyperion Development". Notice the ; at the end of the statement.
		  int num = 123; //The VARIABLE 'num' STORES the value 123. Notice the ; at the end of the statement.
		  
		//Declaring variables follow the convention: [Data Type] [Variable Name] = [Value]; as seen above.
		  
		//============ Style =================
		/* A good habit when coding is to always name your variables something relevant (i.e. a name that applies to its value).
			 myName = "John"
			 firstNum = 1
			 
		   It is not required for the code to be 'correct', but if you don't use descriptive names for your variables, it will confuse not just you, but others that read your code.
		   Using descriptive variable names is known as a programming CONVENTION or a programming STYLE.
		   It's important to develop a good programming style early.		   
		   
		*/

		//============ Data Types =============

		/*You might be wondering why the words 'String' and 'int' precede the two variables we mentioned earlier on. These are known as DATA TYPES. There are 2 types of data:
				 1) Primitive data types: Integer, Double, Char and Boolean.
				 2) Complex data: String, arrays and objects.
				 
		When choosing a data type for a variable, one needs to decide the type of data that it will store. 

		*/
		
		//Integers store integer values (no decimal points):
		int twenty = 20; //The data type to declare an integer is 'int'. We will refer to integers data types as ints from now on.
		
		//Doubles store double values, or real numbered numbers ie numbers with decimal points:
		double half = 0.5;  //One half
		
		//Characters store single letters:
		char a = 'a';  //Note that chars are surrounded by SINGLE QUOTES, ie ' . Don't forget to close your quotes when declaring a char!
		
		//Strings store text, or characters that have been 'strung' up:
		String name = "John"; //Note that Strings are surrounded by DOUBLE QUOTES, ie ". Don't confuse this with single quotes for chars. 
		
		//============ Assigning Variables =============
		
		//Once a variable is declared, the program will remember its variable. 
		//Your program's code is executed from the top of the file to the bottom.
		//At this point, we've defined the variables 'twenty', 'half', 'a', 'name' and 'num'. 
		//At this point in the program, we can call these variables because they have already been DECLARED:
		
		//Let's make assign something to the variable name. Can you see above we declared name = "John"? Now let's change the value stored in name.
		name = "Mark";
		
		//Your program is able to do that, because it knows what the variable 'name' is (ie what data type it is).
		//If you asked your program to store a new value in a variable called 'nameTwo', your program would not compile because at this point,
		//because a variable called nameTwo hasn't been declared in your program yet.
		
		//Similar to this, if you tried to store a String in a variable that has already been defined as an integer...
		
		//int half = "0.5";  WRONG! We can't store "0.5' in here because a String can't be stored in an int variable.
		
		//....You would get a compilation error.
		
		
		//============ Assigning and Declaring Variables =============
		
		//You can even declare and assign variables at the same time:
		
		int sum = 10 + 20;  //Store the result of adding 10 and 20 in the integer variable sum. Sum now stores the int value 30
		
		//You can even declare and assign variables USING other variables:
		
		int sumTwo = sum + 10; //What int value does sumTwo hold now? That's right - 40. 
		
		int sumThree = sumTwo + sum; //What about sumThree? Think carefully! 
		
		//We can assign an already declared variable a NEW value:
		
		sumThree = 0; //sumThree no longer stores what it used to, its value has been overwritten.
		
		
		//========================  **** SUMMARY: Variables **** ========================= 
		
		//1.) Know how to declare variables: [Data Type] [Descriptive Variable Name] = [Value appropriate to data type or operation that results correct value];
		
		//2.) Know that you can only use variables if they have been ALREADY BEEN DECLARED.
		
		//3.) Know that you can't have two variables with THE SAME NAME in a program. Example if I was to do:
		
		//int sumThree = 50; 
		
		//... I would get a compilation error. This is because sumThree has ALREADY been defined above.
		
		//I could however reassign sumThree by going sumThree = 50; without redeclaring it
		
		
		//============ Working with integers =============
		
		//As seen above, we can add integer variables as expected. Here are some other operations:
		
		   int num6 = 2+2; // 2 plus 2
		   int num7 = 4-2;// 4 minus 2
		   int num8 = 2*2; // 2 multiplied by 2   NOTE the multiplication sign is not x
		   int num9 = 4/2; // 4 divided by 2      NOTE the division sign is / 

		//============ Output ================
		
		//Remember in Task 1 the program we ran outputsomething? Let's see how we can do that.

		// Most programs would be useless if they couldn't output any data. Java has a very simple built-in method of outputting data.

		System.out.println ("Hello World"); //Anything that is in the brackets is what will be output.
		
		//You'll have to memorise System.out.println . BE SURE THAT EVERYTIME YOU TYPE IT, YOU FOLLOW THE EXACT PUNCTUATION AND CAPITALISATION.
		//If you make the smallest mistake, such as system.out.println("hello"); or system.outprintln("Hello"); your code will not compile.

		//For now, let's only try outprint STRINGS. 
		   
		//============ Working with Strings =============   
		   
		//Strings are a bit more complicated, can we add two strings?
		
		String firstName = "Alan";
		String lastName = "Turing";
	
		String fullName = firstName + lastName;
		
		//What does fullName store? Let's outprint it to the output terminal:
		
		System.out.println(fullName);
		
		// * Compile and run this program as shown in Task 1 and take a look at what is output at the bottom of JGrasp. It should be after "Hello World" *
		// What problem do you see?
		
		//The Strings have been CONCATENATED together to form a new string stored in fullName with value "AlanTuring".
		
		//Alan needs a space between his first and last name. Let's fix that by reassigning fullName:
		
		fullName = firstName + " " + lastName; //We reassigned fullName, inserting the empty String " " in between his name.
		
		//Now insert a System.out.println(fullName); below this comment, compile and run the program again to see the new output:
		
		//Insert your code here: 
		
		
		//End inserted code

		
		// You can also add lines breaks and tabbed spacing to your output.
		   
		   System.out.println ("A tab comes after this: \t" + "There is a tab before this text on the screen"); // The \t command will create a tab if its inside a String
		   System.out.println ("A new line comes after this: \n" + "There is a new line before this text on the screen"); // The \n command will create a new line if inside a String  
		   
		//To outprint non-strings, add them to a string:
		
		   System.out.println("The number is " + 3); 
		   
		//You can't do System.out.println(3); , because 3 is not a String by itself. We'll talk more about this in the next task.

	
		//You should know the basic data types, assigning and declaring variables and how to output information. 
		//You also should know how to write, compile and run Java programs - this is a good start!
		
		//==== Working with Doubles ===
		
		//Working with doubles is very similar to ints and strings:
		
		double product = 30*2; //sum stores the double 60.0 
		
		//If you divide a double, you'll get the correct result since doubles can store decimal points:
		
		double answer = product/7; //Stores 8.57142857143
		
		
		//========  Casting ========
		//We want to outprint a double, but how can we do that? System.out.println only outprints STRINGS.
		
		//Solution: Can convert the contents of a variable from one data type to another:
	
		//To convert a double or int to a string, simply ADD or CONCATENATE it to a String:
		
		System.out.println(answer + ""); //Adding answer to a String to CAST it to a String 
		
		//Another way of understanding this is that System.out.println is a function that can only be given a String to work with.
		
		
		//We may want to cast from Strings to integers...
		
		//What's the difference between these two?
		String age = "18"; 
		int ageInt = 18; 
		
		//Try:
		System.out.println(age + ageInt); //1818 will be outprint because you're adding a String to an Int and this casts ageInt to a string and concatenates the two.
		
		//We want to add them together to get 18+18=36. So we need to cast age to an integer also, this is how this can be done.
		
		int ageAsAnInt = Integer.parseInt(age); //Integer.parseInt is a function that takes in a String and casts it to an integer datatype.
		
		//BEWARE, you can't cast the String "abc" to an integer! That just can't be a number. Your program will give you an error if you try.
		
		int correctAddition = ageAsAnInt + ageInt; //adding two ints gives an int in return
		
		System.out.println("The addition is now correct: " + (correctAddition));
		
		//What about if we want to cast to a double?
		
		double double19 = Double.parseDouble("19.24"); //A string (denoted by " ") has been CAST to a double data type, preserving the decimal point

	
		/*	You should know the basic data types, assigning and declaring variables and how to output information. 
			You also should know how to write, compile and run Java programs.
			You should now also be comfortable with dealing with syntax, compilation and logical errors. 
	
		====== Control statements ========
		Our programs don't seem very powerful if all we can do is define and output variables.
		Let's talk about CONTROL STATEMENTS.
		These are statements that add LOGIC to your programs. 
		The most important of these statements is the if statement:
		
		*/
		
		int number = 30;
		
		if (number > 10)
		{
			System.out.println("The value stored in variable num is bigger than 10");
		}
		
		/* 	Can you understand what the above code does? 
			It simply checks what int value is stored in the variable num. If the value is bigger than 10, it outprints a message.
			The > sign in mathematics means bigger than. 
			In your head when reading this, you should be able to under that it means 'If num bigger than 10, do what's in the brackets'
			
			If the value is not bigger than 10, the code inside the brackets under the if statement DOES NOT EXECUTE.
			This is because the if CONDITION is not satisfied (ie is not true), so the code in brackets is ignored. 
			
			Let's look at another if statement:
		*/
		
		int numTwo = 15;
		
		if (numTwo > 10) //The CONDITION
		{
			System.out.println("The value stored in variable numTwo is bigger than 10");
		}
		else
		{
			System.out.println("The value stored in variable numTwo is not bigger than 10");
		}
		
			/* 	
			This if statement checks a new variable, numTwo.
			If the value stored in numTwo (15 at the moment) is bigger than 10, then the first message is displayed.
			If in any other case the value is not bigger than 10 (so it could be 0, 8, -2) , then the second message is displayed.
			Both messages will never be displayed. It is logically impossible because a number cannot be both bigger than 10 and not bigger than 10.
			Thinking logically is a critical part of programming. 
			
			If statements do not NEED to have an else statement. The above if known as an if-else statement. 
			You can just have an if statement by itself, like in the first example.
			*/
		
		/* ====== The Syntax of if statements ======== 
		
		Remember how tricky syntax could be?
		Unfortunately if statements introduce many places where you can mix up a bracket, or insert a ; in the wrong place.
		Look carefully at the if statement below. 
		
		*/
		
		double doubleNum = 11.5;
		
		if (doubleNum < 10) //1.
		{//2.
		
			System.out.println("You'll only see this output if doubleNum is less than 10"); //3.
			System.out.println("DoubleNum is less than 10!");
			
		} //4.
		else //5
		{//6
		
			System.out.println("DoubleNum is not less than 10."); //7.
			
		}//8
		
		/* 
			Note the commented numbers in the if statement above. 
			Let's talk about the Syntax at each of these numbers:
			
			1.) Notice how the CONDITION for the if statement is stored in ROUND BRACKETS: (doubleNum < 15)
				Notice also how there is no ; at the end of this line!
				
				This is because just the line if (doubleNum < 10) is not a statement by itself.
				It's line starting a sentence but not finishing it. If that happens - so what? 
				That's why there isn't a ; at the end of it. It's not a statement by itself but rather the START of a longer statement.
				
			2.) Notice how directly after this line there is an opening CURLY BRACKETS: { 		
				The { bracket signifies the start of the rest of the statement.
				Notice how it has a MATCHING CLOSING CURLY BRACKET, }, at 4. 
				
				To type curly brackets, you need to hold down SHIFT and press the curly bracket symbol near the left side of your keyboard.
				
				Don't confuse the ROUND BRACKETS, ( ) , of 1. with the CURLY brackets of 2 and 4 { }
				
			3.) This is just a normal statement in Java. Note the ; at the end of the line. 
				Note carefully that it is within the two curly brackets 2 and 4. 
				You can type as many statements as you want in hre! Just line them up and they'll execute in order if the condition above is satisfied.
				
			4.) The closing bracket that matches 2. DON'T FORGET THIS BRACKET. ALL OPEN BRACKETS MUST HAVE A CLOSING ONE IN JAVA.
				If you do not close your brackets, your code will not compile.
				
			5. 6. 7.) 	Notice the structure of the else statement.
						Note how it comes directly after 4.) and under the if statement.
						Notice how the else statement has no CONDITION. It's condition is basically when the if statement is false!
						Notice how otherwise the structure is the same as the if statement.
		*/
		
		
		/* ====== More if statement examples ======== 
		
			Now that you fully understand the nitty gritty of the syntax, here are some more examples of if statements.
			Note the different logical operators in the examples below!
			You can check many different things with if statements - everything in fact!
		
		*/
		
		int numThree = 42;
		
		if (numThree == 20) //** NB: What's the difference between = and == ?
		{
			System.out.println("numThree is equal to 20. I'm certain of it.");
		}
		
		/*
			In the example above, why don't we just say if (numThree = 20) ?
			Why do we use == instead?
			
			A very important thing to remember, is that when checking equality in Java.
			We must use the == sign, because = is used to ASSIGN new values to variables, == is the command to CHECK IF THEY ARE EQUAL TO SOMETHING.
			ie:
			
			numThree = 20; 
			
			Means assign the value 20 to the variable numThree.
			
			numThree == 20;
			
			Means is the value stored in variable numThree equal to 20? This question returns a TRUE or FALSE answer.
		*/
		
		
		String name_person = "John";
		
		if (name.equalsIgnoreCase("Tom"))   //We can't compare strings using ==
		{
			System.out.println("Greetings, Tom");
			
		}
		else
		{
			System.out.println("I don't know you. Hello " + name_person); 
		
		}
		
		/*
			In the example above, we don't compare Strings using ==
			This is because Strings are special data types.
			For now, just remember we use variableName.equalsIgnoreCase("String to compare to"))
			to check if two String variables store the same value.
		*/
		
		
		String nameOne = "John";
		String nameTwo = "Mark";
		
		if (nameOne.equalsIgnoreCase(nameTwo))   //We're comparing the values of two String variables directly here.
		{
			System.out.println("nameOne and nameTwo store the same values");
			
		}
		else
		{
			System.out.println("nameOne and nameTwo store different values"); 
		
		}
		
		/* ====== The if-elseif statement ======== 
	
			What if you're writing a program for your grandmother. 
			The program asks for her password, her password is 123.
			But she often forgets and sometimes enters 1234.
			To save her embarrassment, you want to write her a special program.
			Your program will show a welcome message if she enters 123, OR 1234, but not otherwise.
			
			Here's an example of a statement to do that:
		
		*/ 
		
		int password = 1234; //Imagine this is what your grandmother entered in this run of the program.
		
		if (password == 123)
		{
			System.out.println("Password correct! Welcome Grandmother.");
			
		}
		else if (password == 1234)
		{
			System.out.println("Password correct! Welcome Grandmother.");
		}
		else
		{
			System.out.println("Password incorrect.");
		}
		
		/* 
			IF the first condition isn't satisfied (the value of password is NOT 123)
			THEN CHECK THE SECOND CONDITION and IF THIS ISNT SATISFIED (the value of the pass is ALSO NOT 1234)
			THEN outprint Password Incorrect.
			
			Basically, and else if statement allows you to do more 'checks'.
			Remember that the conditions of your if statements are checked in the order they are written, from top to bottom.
			ie check if it is 123 first, then check if its 1234 ONLY IF THE FIRST CHECK FAILED.
			
			As with all if statements, at most only ONE of the above brackets of code will execute. The rest will be skipped.
		*/ 
		
		
		
		/* ====== Other comparison operators ======== 
	
			Let's look at some examples:
			
		*/
		
		double numd = 100;
		 
		if ((numd/2)==50) //You can have an operation inside the condition
		{
			System.out.println("Numd must store the value 100, since 50 times 2 is equal to 100");
			
		}
		else if (numd > 100)	//Greater than operator
		{
			//You can have nothing happen inside an if statement, but this is bad programming style.
		}
		else if (numd < 100) //Less than operator
		{
		
		}
		else if (numd != 25) //NOT EQUAL TO OPERATOR
		{
			System.out.println("I am certain numd does not store the value 25");
		}
		else if ( (numd%2)== 0) //MODULO OPERATOR. 
		{
			System.out.println("The value stored in numd is even because the remainder when it is divided by 2 is 0.");
		}
		
		
		/*	
		====== Getting input ======== 
	
		You may have noticed that we can outprint information, but you haven't been shown how to get input from a user. 
		There are many methods to do this. We will show you a method that is easier for the user, but not necessarily the programmer.
		
		When programming Java, it is important to understand that there are huge LIBRARIES/PACKAGES that come standard with Java.
		Just like when you buy a calculator, there are hundreds of built in functions. If you're only using your calculator to do simple sums,
		you're missing out on the other functions that it has to offer.
		
		Java is similar to this. There are libraries that other programmers have made, that have built in functions to do common tasks.
		We could write a long and complicated program that provides a popup box that a user can enter data into, that is then stored in the program.
		But some programmer has already done this for us. All we need to do is IMPORT his/her library and call the function that does this.
		
		For this specific task, we will use the Java SWING library. This is a library or package full of graphical user interface (GUI) functions.
		To use any functions from this library, we must import it. You can import libraries with the following command:
		
		import javax.swing.*;  
		
		This command is known as an IMPORT statement.
		All IMPORT STATEMENTS must come BEFORE the main method of your program, ie:
		
		import javax.swing.*;
		
		public class example
		{
			
			
			public static void main(String[] args)
			{
			
				System.out.println("My program with an import!");
			
			
			}
			
		}
		
		This particular command imports the Java SWING library of functions. All you have to remember is to include this statement 
		in the place shown about in any programs where you want to get input. You may notice in this example program 
		
		Now that this command is in the right place, you can call one of the functions from the library ANYWHERE in your program as follows:
	
		*/ 
		
		String response = JOptionPane.showInputDialog("Enter your name");
		
		/*
			What does this command do?
			
			When your program executes this line of code, a popup box is shown to the user. 
			The popup box displays the message entered as a String in the brackets.
			Whatever the user enters is stored as a STRING variable. Here we have stored the response in the String variable response.
			
			The statements below this command will NOT execute until the user has entered something into the box and pressed continue.
			
			For now, you'll have to memorise the JOptionPane.showInputDialog statement, or copy and paste i.
			Note the round brackets around the String message, the semicolon, and especially the capitals in JOptionPane.showInputDialog (JO, P, I, D)
      */
      
	} // Remember whenever you open any type of bracket, it must have a matching closed one of your code will not run.
}  // Closing brackets to indicate end of the class
