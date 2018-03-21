<?php

echo "Hello PHP, How are you?" ,"<br>";

// Single line comment

# Single Line Comment

/*
 * Multiline comments
 */

$name = "IJSE";

var_dump($name);

//$myVar = tRue;
//$myVar = 0b1;   // oB1;
//$myVar = 010;
//$myVar = 10;
//$myVar = 0xA;   //0XA;

$myVar = 1.25E2;

echo "<br>";

var_dump($myVar);

echo "<br>";

$myString = 'This is a sin\tgle quote string $myVar';

echo $myString, "<br>";

$myString = "This is a dou\tble quote string {$myVar}123";

echo $myString, "<br>";

$myVar = null;

//define('PI',3.14);
const PI = 3.14;

echo PI, "<br>";

$myArray = array(10,20,"IJSE",40,50);

var_dump($myArray);

$myArray = array(array(10,20), array(30,40));

echo "<br>";
var_dump($myArray);

echo "<br>", "Array Length : " . sizeof($myArray), "<br>";

$myVar = (bool) 1;
var_dump($myVar);

echo "<br>";

// && and (AND)
// || or (OR)

$myArray = array(10,20,30,40,50);

foreach($myArray as $value){
    echo $value, "<br>";
}

$myArray = array("a" => "IJSE", "b" => "ESOFT");

foreach($myArray as $key => $value){
    echo $key , " : ",  $value, "<br>";
}

function myMethod(){
    echo "Void Method" , "<br>";
}

myMethod();

function myReturnMethod(){
    return "Return Type Method <br>";
}

echo myReturnMethod();

function myMethodWithParams($name, $age = 10, $location){
    echo $name, " " , $age, " ", $location;
}

myMethodWithParams("IJSE",100, "Panadura");

//function methodOverloading(){
//
//}
//  Method overloading doesn't support
//
//function methodOverloading($name){
//
//}

function myVarArgsFunction(...$args){
    foreach ($args as $value){
        echo $value, "<br>";
    }
}

myVarArgsFunction("ijse", "esoft","nsbm","nibm");
