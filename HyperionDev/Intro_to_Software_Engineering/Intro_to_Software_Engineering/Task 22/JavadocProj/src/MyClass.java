/**
 * Java class example
 * The class illustrates how to write comments used 
 * to generate JavaDoc documentation
 *
 * @author Your Name
 * @version 2.00, 23 Dec 2017
 */
public class MyClass {
    /**
     *
     * Simple method.
     * <br>
     * The method prints a received message on the Console 
     *
     * @param message String variable to be printed
     * @see MyClass
     * @deprecated
     * @since version 1.00
     */
    public void MyMethod(String message)
    {
        System.out.printf(message);
    }

        /**
     *
     * Simple method example.
     * The method prints a received message on the Console 
     *
     * @param message String variable to be printed
     * @since version 1.00
     */
    public void printMessage(String message)
    {
        System.out.printf(message);
    }
     /**
     *
     * Simple method example.
     * <br>
     * The methods adds 2 numbers and return the result
     *
     * @param val1 the first value
     * @param val2 the second value
     * @return sum between val1 and val2
     * @since version 2.00
     */
    public int add(int val1, int val2)
    {
       return val1+val2;
    }
}