public class School
{
   public static void main (String [] args)
   {
   
      Student sally = new Student("Sally", 15, 8, 'D');
      Student sipho = new Student("Sipho", 17 , 11, 'A');
      Student rajesh = new Student("Rajesh", 19, 12, 'B');
      
      System.out.println("Students\n");
      System.out.println(sally + "\n");
      System.out.println(sipho + "\n");
      System.out.println(rajesh);
   }
}