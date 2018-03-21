<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 2/5/18
 * Time: 10:47 AM
 */

$myVar;             // Declared, Undefined
$myVar = "IJSE";    // Declared, Defined

if (!isset($myVar)){
    echo "NULL";
}else{
    echo "NOT NULL";
}

unset($myVar);

echo "<br>";

$myVar = null;
// ''
// 0
// 0.0
// '0'
// FALSE
// null
// array()

if (empty($myVar)){
    echo "EMPTY";
}else{
    echo "NOT EMPTY";
}

echo "<br>";

$myVar = "IJSE";

//function printIJSE(){
//
//    global $myVar;
//    echo $myVar;
//
//    unset ($myVar);
//
//    echo $myVar;
//
//}
//
//printIJSE();
//
//echo "<br>",$myVar;

function printIJSE(){

    echo $GLOBALS["myVar"], "<br>";

    unset ($GLOBALS["myVar"]);

}

printIJSE();

echo $myVar, "<br>";

