public class Student {

	// Attributes
   String name;
   int age;
   int grade;
   char registrationClass;
	
	// Methods
   public Student(String name, int age, int grade, char registrationClass) {
      this.name = name;
      this.age = age;
      this.grade = grade;
      this.registrationClass = registrationClass;
   }

   public String getName() {
      return name;
   }
	
   public char getRegistrationClass() {
      return registrationClass;
   }
   
   public String toString() {
      String output = "Name: " + name;
      output += "\nAge:" + age;
      output += "\nGrade:" + grade;
      output += "\nRegistration class:" + registrationClass;
   
      return output;
   }

}
