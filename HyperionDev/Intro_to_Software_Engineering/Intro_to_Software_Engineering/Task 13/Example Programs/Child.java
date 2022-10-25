class Parent
{
    String name;
    
}
public class Child extends Parent {
    String name;
    public void details()
    {
        super.name = "Parent";	    //refers to parent class member
        name = "Child";
        System.out.println(super.name+" and "+name);
    }
    public static void main(String[] args)
    {
        Child cobj = new Child();
        cobj.details();
    }
}