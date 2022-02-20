package com.company.Basics;


//Arrays are used to store multiple values in a single variable, instead of declaring separate variables for each value.
//To declare an array, define the variable type with square brackets:
public class JavaArrays {

    public static void main(String[] args) {

//        String[] cars;
//        We have now declared a variable that holds an array of strings. To insert values to it,
//        we can use an array literal - place the values in a comma-separated list, inside curly braces:
        String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};

//        To create an array of integers, you could write:
        int[] myNum = {10, 20, 30, 40};

//        You access an array element by referring to the index number.
        System.out.println(cars[0]);
        cars[0] = "Opel";
        System.out.println(cars[0]);

//        To find out how many elements an array has, use the length property:
        System.out.println(cars.length);

//        Loop Through an Array with FOR LOOP
//        You can loop through the array elements with the for loop,
//        and use the length property to specify how many times the loop should run.
        for (int i = 0; i < cars.length; i++) {
            System.out.println(cars[i]);
        }

//        Loop Through an Array with For-Each
        for (String i : cars) {
            System.out.println(i);
        }

//        Multidimensional Arrays
//        A multidimensional array is an array of arrays.
        int[][] myNumbers = { {1, 2, 3, 4}, {5, 6, 7} };
        int x = myNumbers[1][2];
        System.out.println(x); // Outputs 7

//        We can also use a for loop inside another for
//        loop to get the elements of a two-dimensional array (we still have to point to the two indexes):
        for (int i = 0; i < myNumbers.length; ++i) {
            for(int j = 0; j < myNumbers[i].length; ++j) {
                System.out.println(myNumbers[i][j]);
            }
        }

    }
}
