package com.company.Basics;


//switch(expression) {
//  case x:
//    // code block
//    break;
//  case y:
//    // code block
//    break;
//  default:
//    // code block
//}
public class JavaSwitch {
    public static void main(String[] args) {
//        Use the switch statement to select one of many code blocks to be executed.
//      The example below uses the weekday number to calculate the weekday name:
        int day = 4;
        switch (day) {
            case 1:
                System.out.println("Monday");
                break;
            case 2:
                System.out.println("Tuesday");
                break;
            case 3:
                System.out.println("Wednesday");
                break;
            case 4:
                System.out.println("Thursday");
                break;
            case 5:
                System.out.println("Friday");
                break;
            case 6:
                System.out.println("Saturday");
                break;
            case 7:
                System.out.println("Sunday");
                break;
        }

        //When Java reaches a break keyword, it breaks out of the switch block.
        //This will stop the execution of more code and case testing inside the block.
        //When a match is found, and the job is done, it's time for a break. There is no need for more testing.

//        The default keyword specifies some code to run if there is no case match:
        switch (day) {
            case 6:
                System.out.println("Today is Saturday");
                break;
            case 7:
                System.out.println("Today is Sunday");
                break;
            default:
                System.out.println("Looking forward to the Weekend");
        }
//        Note that if the default statement is used as the last statement in a switch block, it does not need a break.

    }
}
