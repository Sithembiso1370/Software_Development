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


import java.util.*;
import javax.swing.*;   
   
public class example2
{
	public static void main (String [] args )
	{
		int i, sum = 0;
		i = 2;				//initial even integer for the sum
		
		System.out.print( "2" );

		while( sum <= 250 )	//loop test; check current value of sum
		{
			sum += i;		//add integer to sum
			i += 2;			//update i to next even integer
			System.out.print( "+"+i );
		}
		System.out.println();
		
		int choice = 0;
			do
			{
				System.out.println( "Enter today's number from the menu:" );
				choice = Integer.parseInt( JOptionPane.showInputDialog( 	"1. Sunday\n"+
												"2. Monday\n"+
												"3. Tuesday\n"+
												"4. Wednesday\n"+
												"5. Thursday\n"+
												"6. Friday\n"+
												"7. Saturday\n"+
												"0. Quit program" ) );
									
				switch( choice )
				{
					case 1: System.out.println( "Sunday! Last day to do the homework." );break;
					case 2: System.out.println( "Monday! Be happy, 5 more days in the week." );break;
					case 3: System.out.println( "Tuesday! Wednesay will be better." );break;
					case 4: System.out.println( "Wednesday! Can you feel it in the air?" );break;
					case 5: System.out.println( "Thursday! Get set!" );break;
					case 6: System.out.println( "Friday! Time to party!" );break;
					case 7: System.out.println( "Saturday! Put your legs up and relax" );break;
					default: System.out.println( "Please enter a number between 1 and 7, or 0 to quit" );break;
				}
				
			}while( choice != 0 );
			
		int x, total = 0;		/*Declarations to be used in the comparison of the while-loop and for-loop repetition constructs*/
	
		/*while-loop */
	
		/*initialise*/
		x = 1; 
		
		/*test*/
		while(x <= 10) 
		{
		/*update:*/
			total += x;
			x++;
		}
		
		/*For-loop. Equivalent to the above while-loop*/
	
		for( x = 1; x <= 10; x++ )
			total += x;
		
		/* 
		Obeserve how compact this implementation is in comparision to the while-loop. 
		Compact code can be easier to read and thus quickly communicate what is going on to other programmers that might want to read your code.
		*/
		
		for( int count = 10; count > 0; count --){
			System.out.print(count + " "); //loop body
			System.out.println("Blast Off!!!"); //after execution of for loop
		}
			
		int coinValue = 50;
		switch( coinValue )
		{
			case 1:
			case 2:
			case 5:
			case 10:	System.out.println( coinValue + " cents is a standard coin" );
						break;
			case 50:	System.out.println( coinValue + " cents is a special coin" );
						break;
			default:	System.out.println( "No coin for " + coinValue + "cents" );
						break;
		}
		
		/*
		Missing break statement
		If a break statement is not placed at the end of a case-option the runtime system will execute instructions in the next
		case-option as well. For instance, assume the example includes no break statements and coinValue is 10. A run would produce
		output that includes the case ‘50’ option and the ‘default’ option.
   						
		Output:
		10 cents is a standard coin 
		10 cents is a special coin 
		No coin for 10 cents
   
		Feel free to add and/or remove the break statements in the different parts of this file
      */
		
		switch( coinValue )
		{
			case 1:
			case 2:
			case 5:
			case 10:	System.out.println( coinValue + " cents is a standard coin" );
			case 50:	System.out.println( coinValue + " cents is a special coin" );
			default:	System.out.println( "No coin for " + coinValue + "cents" );
						break;
		}
	}
}
