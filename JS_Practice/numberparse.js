// Collect input from a user
let juice = prompt("number");

// Convert the input to a number
let newnumber = parseInt(juice);

// Use Math.random() and the user's number to generate a random number
let randomNumber = Math.floor(Math.random() * newnumber)+1;

// Create a message displaying the random number
document.querySelector("main").innerHTML = `This is the New Number: ${newnumber} and Random Number: ${randomNumber}` ;