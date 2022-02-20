// Example 1 

// Declaring an Empty Array
var myfirstArray = [];
// console.log(myfirstArray);

// Inserting multiple values or an array into the Array using the bracket notation
myfirstArray = ["sthe " , "nosipho","Ntokozo","Nkululeko"];
// console.log(myfirstArray);
// Inserting a single value at the end of an array
myfirstArray[myfirstArray.length] = "new member";
// console.log(myfirstArray.length);
// console.log(myfirstArray);
// Inserting a single value at the end of an array2
myfirstArray[myfirstArray.length] = "new member2";


// console.log(myfirstArray);

var myfirstArray2 = ["Life","Prosperity","Health"];


 var myconcatarray = [["Life","Prosperity","Health"],myfirstArray,myfirstArray2,["Life","Prosperity","Health"]];

//  console.log("2D Array is equal to | ",myconcatarray);

// Dynamic for loop that itirates over any dimensions of arrays
 for (let i = 0; i < myconcatarray.length; i++) {
     console.log("The array dimension im at is  | ",myconcatarray[i].lastIndexOf());
    console.log('---------------------------------------');
     let count = myconcatarray[i]

     
    for (let i = 0; i < count.length; i++) {
        //  const element = array[i];
        console.log(count[i]);    
    }
 }

// Looping through dimension 1 of my arrray
//  for (let i = 0; i < myconcatarray[0].length; i++) {
//     //  const element = array[i];
//     console.log(myconcatarray[0][i]);
     
//  }

// Looping through dimension 2 of my arrray
//  for (let i = 0; i < myconcatarray[1].length; i++) {
//     //  const element = array[i];
//     console.log(myconcatarray[1][i]);
     
//  }

//  console.log("First born of 2D Array is equal to | ",myconcatarray[0][0]);