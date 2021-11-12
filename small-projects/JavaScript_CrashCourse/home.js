
Tutorial by "Quazi" Clever Programmer:
8 Hour Course...
Youtube Link:
https://www.youtube.com/watch?v=Qqx_wzMmFeA&list=PL763HnmWhfh1AVgFerCKhkUXRMyXtV9TO&index=44


/////////////////////////////////////

how to--> console.log('hello world');

how to--> alert('Ignore this');

how to--> prompt('Ask a question?'); 

// <--How to a comment out inline

/* <-- how to comment out a whole phrase --> */

// Variables
var b = 'smoothie';
console.log(b); //it will display Smoothie in Browser Console (Right click Inspect or (Fn)F12 in browser)


var someNumber = 45;
console.log(someNumber);


//in HTML Tag <h1 id="someText"></p>

var age = prompt('What is your age?');

document.getElementById('someText').innerHTML = age; 

// Numbers in JavaScript

var num1 = 10;

// Increment num1 by 1

num1++;

//Decrement num1by 1

num1--;

// Divide /, multiply *, remainder %

// Increment/Decrement by 10
num1 += 10;

/*
// Function

1. Create a functon
2. Call the function

*/

// Create
function fun() {
    console.log('this is a function');
}

// Call
fun();


/* Lets create a function that takes in a name 
and returns and says hello followed by your name

For Example:

Name: "Fig"
Return: "Hello Fig"
*/

function greeting () {
    var name = prompt('What is your name?');
    var result = 'Hello ' + name;                        // <-- Joined Strings is called Sting Concatenation
    console.log(result);
}

greeting();

// How do arguments work in functions?
// How do we add 2 numbers together in a function?  
function sumNumbers(num1, num2) {
    var result = num1 + num2;
    console.log(result);

}

sumNumbers(1, 2);
// sumNumber ('Hello', 'Fig' );
// sumNumber ('1', '2');



// Reformat of clean code from above "yourName"
function greeting (yourName) {
    var result = 'Hello ' + yourName;                   // <-- Sting Concatenation
    console.log(result);
}

var name = prompt('What is your name?');
greeting(name);


// While Loops https://youtu.be/Qqx_wzMmFeA?t=2043
var num = 0;

while (num < 100) {
    num += 1;
    console.log(num);
}

// For loop
for(let num = 0; num < 100; num++){

}


// Data Types
let yourAge = 18;                                       // Number
let yourName = 'Bob';                                   // String
let name = {first: 'Jane', last: 'Doe'};                // Object or Dictionary
let truth = false;                                      // Boolean
let groceries = ['apple', 'banana', 'oranges'];         // Array
let nothing = null;                                     // Value Null

// Strings in JavaScript (common methods)
let fruit = 'banana';
let moreFruits = 'banana\napple';                       //New Line

console.log(fruit.length);
console.log(fruit.indexOf('an'));
