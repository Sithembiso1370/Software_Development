public class Example {
// Recursion is the process of solving a problem by breaking it up into smaller sub-problems and solving those. 
// This may sound confusing at first, but is an important technique, and there are some problems, which can only be solved by thinking recursively. 
// Some functional programming languages (like Lisp) do not have looping constructs such as "for" and "while", but can still accomplish everything that languages like Java can by using recursion.

// Below is an example of a recursive function sum(n) that sums up all consecutive integers from 0 to n. 
// Say, we want to work out sum(3), we can break this problem down into the smaller problem, 3 + sum(2). 
// The sum of the first two integers sum(2) is easier to work out than the sum of the first three integers sum(3).
// Similarly, sum(2) = 2 + sum(1) and sum(1) = 1 + sum(0)
// Since we know that sum(0) = 0, we can easily work out sum(1)
// From sum(1) we can then work out sum(2) and then from sum(2) we can work out sum(3). 

// We therefore obtain sum(3) = 3 + sum(2) = 3 + 2 + sum(1) = 3 + 2 + 1 + 0 = 6, which is the desired result!

   // The implementation of the sum(n) function is shown below:
   public static int sum(int n) {
      if (n == 0) {
         return 0;
      }
      else {
         System.out.println("Calculating " + n + " + sum(" + (n-1) + ")");
         return n + sum(n-1);
      }
   }

   // A recursive function has one or more "base cases" where the answer to the problem is is trivial and it function stops calling itself. 
   // The recursive function calls itself with different parameters every time the "base case" is not true. 
   // If there is no "base case", then the calling of functions will never stop and your program will be stuck in an "infinite loop". 
   // In in the function above, the "base case" is n==0. 
   
   // Consider the line return n + sum(n-1),
   // when n = 3 (for example), sum(3) suspends its own execution and calls sum(2). 
   // sum(3) will only resume when sum(2) has finished. sum(2) in turn, requires sum(1) and sum(0) to have completed execution.
   // Run this example by uncommenting the System.out.println statement in the main method. 


/*
----------------------------------------------------------------------------------------------------
 Optional: What if the base case is set as n = 1? Will the function still work? If so, what changes need to be made?
----------------------------------------------------------------------------------------------------
*/

   // A more informative version of the sum function is shown below:
   public static int sum_verbose(int n) {
      if (n == 0) {
         System.out.println("The sum of n = 0 is 0");
         return 0;
      }
      else {
         int calc;
         System.out.println("Calculating " + n + " + sum(" + (n-1) + ")");
         calc = n + sum_verbose(n-1);
         System.out.println("Calculated sum(" + n + ") to be " + calc);
         return calc;
      } 
   }

/*
---------------------------------------------------------------------------------------------------
Optional: Which method do you think would be faster - A recursive implementation of sum or an iterative version? Why?
---------------------------------------------------------------------------------------------------
*/


   public static void main(String[] args) {
    // Uncomment the statement below to run the sum(n) function.
    // System.out.println(sum(3));
    System.out.println("\n");
    // Uncomment the statement below to run the sum_verbose(n) function.
    // System.out.println(sum_verbose(3));
   }

/*
------------------------------------------------------------------------------------
For interest:

The Towers of Hanoi (http://en.wikipedia.org/wiki/Tower_of_Hanoi) is a famous puzzle which is thought to have originated in Vietnam. It can, however, be solved in just a few lines of Java and is shown in the attached file, TowersOfHanoi.java
*/
} 
