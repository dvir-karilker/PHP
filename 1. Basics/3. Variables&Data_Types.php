<?php

// The "echo" statement can be used to print a desired text.
// Simply write "echo" followed by the text in double or single quotes:
echo "Text to be printed";
// ^^  Outputs: Text to be printed

// Pay attention that every character (inc. spaces " ") are being printed as they are.



// In PHP Variables are initialized using the "$" sign, followed by the Name of the variable, which then sets to its Value:
$x = 10;

// To output the Value, use the "echo" statement:
echo $x;
// ^^  Outputs: 10

// To print the value of a variable along with other text/variables, use of of two options:
// 1 -
echo "We have $x students in our class";
// 2 (with "." between each piece of the text) - 
echo "We have " . $x . " students in our class";
// ^^  Both Outputs: We have 10 students in our class

// !NOTE! - By using the second (2) method, make sure to add spaces (" ") before and after the variable placement
// to prevent all parts of the text from being connected to eachother (without it, Outputs: We have10students in our class)



// Variables can store data of different types, each being used in specific cases.
/* PHP supports the following data types:

 - String
 - Integer
 - Float (floating point numbers - also called double)
 - Boolean
 - Array
 - Object
 - NULL
 - Resource  */
















?>
