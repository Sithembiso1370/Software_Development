// JavaScript Object Oriented Programming Tutorial Beginners - OOP in JavaScript


// Creating the Person Class
class Person {
    // A variable defined when its passed in as a parameter
    surname = "Maphanga";  
     // A variable defined within the class
    fullname = '';
    // The first method called when the class is instantiated/initialised
    // the constructor can take an external variables and add them to the class reference using the "this" Object because any parameter passed in to a 
    // Class is only available to the Constructor of the Class.
    constructor(name,age){
        this.name = name ;
        this.age = age;
        this.fullname = this.name + " " + this.surname;
        // console.log(this.randomfunction());
      }

    randomfunction = () => {

        var randomtext = "randomtextfromrandomfucmtion";
        return randomtext +" == " + this.fullname;
    }



}

let PersonCopy = new Person("Sithembiso","27");
// PersonCopy Class
// console.log("PersonCopy | ");
// PersonCopy Class fullname  Declaired outside the constructor  but made globaall available to all Objects/Classes contained within the Class
// And all classes extending the class.

// PersonCopy2 Class

// let PersonCopy2 = new Person("Khabonina Simone Ngwenya","23");

// PersonCopy2.hobby = "Soccer";
// PersonCopy2.hobby = "Code";
// console.log("PersonCopy2 | ",PersonCopy);

