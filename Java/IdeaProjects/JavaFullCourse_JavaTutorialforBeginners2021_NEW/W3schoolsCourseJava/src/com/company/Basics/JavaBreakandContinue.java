package com.company.Basics;


//You have already seen the break statement used in an earlier chapter of this tutorial. It was used to "jump out" of a switch statement.
//The break statement can also be used to jump out of a loop.
public class JavaBreakandContinue {

    public static void main(String[] args) {

//         JAVA BREAK
        for (int i = 0; i < 10; i++) {
            if (i == 4) {
                break;
            }
            System.out.println(i);
        }

//        JAVA CONTINUE
        for (int i = 0; i < 10; i++) {
            if (i == 4) {
                continue;
            }
            System.out.println(i);
        }
    }
}
