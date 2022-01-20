// There are a couple of ways to create, or instantiate, objects. The first is to use
// the new operator with a constructor. (A constructor is simply a function that uses
// new to create an object—any function can be a constructor.) By convention,
// constructors in JavaScript begin with a capital letter to distinguish them from
// nonconstructor functions. For example, this code instantiates a generic object
// and stores a reference to it in object:
var object1 = new Object();

console.log(object1);

// object1.name = "jsut an object";
object1.functz = (()=>{
    console.log("hello world");
})();

console.log(object1.functz);

// When you assign an object to a variable, you’re actually assigning a pointer.
// That means if you assign one variable to another, each variable gets a copy of the
// pointer, and both still reference the same object in memory. For example:
// var object1 = new Object();
// var object2 = object1;

// Dereferencing Objects
// JavaScript is a garbage-collected language, so you don’t really need to worry
// about memory allocations when you use reference types. However, it’s best to
// dereference objects that you no longer need so that the garbage collector can free
// up that memory. The best way to do this is to set the object variable to null.
// var object1 = new Object();
// // do something
// object1 = null; // dereference

// Adding or Removing Properties
// Another interesting aspect of objects in JavaScript is that you can add and
// remove properties at any time. For example:
// var object1 = new Object();
// var object2 = object1;
// object1.myCustomProperty = "Awesome!";
// console.log(object2.myCustomProperty);

// Instantiating Built-in Types
// You can instantiate each built-in reference type using new, as shown here:
// var items = new Array();
// var now = new Date();
// var error = new Error("Something bad happened.");
// var func = new Function("console.log('Hi');");
// var object = new Object();
// var re = new RegExp("\\d+");


// Object and Array Literals
// To create an object with object literal syntax, you can define the properties of a
// new object inside braces. Properties are made up of an identifier or string, a
// colon, and a value, with multiple properties separated by commas. For example:
// var book = {
// name: "The Principles of Object-Oriented JavaScript",
// year: 2014
// };
// You can also use string literals as property names, which is useful when you
// want a property name to have spaces or other special characters:



// The instanceof operator takes an object and a constructor as parameters. When
// the value is an instance of the type that the constructor specifies, instanceof
// returns true; otherwise, it returns false, as you can see here:
// var items = [];
// var object = {};
// function reflect(value) {
// return value;
// }
// console.log(items instanceof Array); // true
// console.log(object instanceof Object); // true
// console.log(reflect instanceof Function); // true