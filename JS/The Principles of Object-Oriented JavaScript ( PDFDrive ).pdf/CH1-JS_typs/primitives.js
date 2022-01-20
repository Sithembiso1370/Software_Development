// Despite the fact that they’re primitive types, strings, numbers, and Booleans
// actually have methods. (The null and undefined types have no methods.)
// Strings, in particular, have numerous methods to help you work with them. For
// example:


var name = "Nicholas";
var lowercaseName = name.toLowerCase(); // convert to lowercase
var firstLetter = name.charAt(0); // get first character
var middleOfName = name.substring(2, 5); // get characters 2-4
var count = 10;
var fixedCount = count.toFixed(2); // convert to "10.00"
var hexCount = count.toString(16); // convert to "a"
var flag = true;
var stringFlag = flag.toString(); // convert to "true"
console.log(flag.toString());