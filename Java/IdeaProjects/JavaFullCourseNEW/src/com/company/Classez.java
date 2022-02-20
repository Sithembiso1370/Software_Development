package com.company;

public class Classez {

    public static void main(String[] args) {
        ClassWithinClass myClassWithinClass =  new ClassWithinClass();
        System.out.println(myClassWithinClass.classWithinClass());

        ExternalClass my_externalClass = new ExternalClass();
        System.out.println(new ExternalClass.ClassWithinExternalClass());
    }

    public static   class  ClassWithinClass{
        public  String classWithinClass(){
            return  "classWithinClass printing..";
        }
    }
}

// If it is in the public namespace it needs to be in its own page otherwise remove public
class ExternalClass {

    public static void main(String[] args) {
        ClassWithinExternalClass myClassWithinClass =  new ClassWithinExternalClass();
//        System.out.println(myClassWithinClass.classWithinClass());
    }

    public static   class  ClassWithinExternalClass{
        public  String classWithinClass(){
            return  "classWithinClass inside ExternalClass printing..";
        }
    }
}

