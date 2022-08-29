<?php

// Replace ? With Arithmetic Operators
echo 10 + 20 * 15 / 3 + 190 - 10 % 400; // 0

#####################################################
echo "</br>";

$a = "10";

// Needed Ouput
echo +$a; // 10
echo "</br>";
echo gettype(+$a); //"integer"
echo "</br>";
echo (int)($a); //10
echo "</br>";
echo gettype((int) ($a));//"integer"
echo "</br>";
echo intval($a); //10
echo "</br>";
echo gettype(intval($a));//"integer"
echo "</br>";
############################################################
echo "</br>";
$a = 10;
$b = 20;

// Needed Output
#-1

echo ($a<=>$b);
echo "</br>";
echo "</br>";
#################################################################

$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
var_dump($c > $a); // True
var_dump($a <= $b); // True
var_dump($a != $b); // True
var_dump($a <> $c); // True
var_dump($a !== $c); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(gettype((float) $a) !== gettype($b)); // True
echo "</br>";
echo "</br>";
#################################################################
$points = 10;

// Write Your Code Here

$points +=3;

echo $points; // 13

echo "</br>";

// Write Your Code Here

$points -=5;

echo $points; // 8;

echo "</br>";
#################################################################

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
 $d = $a . ' ' .  $b . ' ' . $c;
 echo "</br>";
// Method Two
$d = "$a $b $c";
echo "</br>";
// Method Three
$d = "{$a} {$b} {$c}";
echo "</br>";
// Method Four
$d = <<<"code"
$a $b $c
code;

echo $d; // Elzero Web School
echo "</br>";
#################################################################

$a = 10;
$b = 20;

echo ($a + $b * $a) + $b + ($a * $a * $a); // 10000

echo "</br>";
#################################################################
// Code 1
// $e = @$f or die(" f not found");
// // echo $e;
// echo "</br>";

// // Code 2
// $h = @file("Not_A_File") or die(" This is not a file");
// echo $h;
// echo "</br>";

// Code 3
(@include("Not_A_File")) or die(" This is not a file");