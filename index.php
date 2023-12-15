<?php
include "include.php";

$student = new Student();

$student->sayHello();

echo "My name is ".$student->myName("Azizbek")."<br>";

echo "I am ".$student->calculateAge(2004)." years old. "."<br>";

echo $student->Live("Uzbekistan")."<br>";

echo $student->myHobbi("programming", "playing table tennis")."<br>";

$student->welcome();

$student->greatingEnd();




$newStudent = new Student();

$newStudent->sayRespond();

echo "Mashaalloh,My name is ".$newStudent->myName("Odina")."<br>";
echo $newStudent->Live("Dubai")."<br>";
echo "And I am ".$newStudent->calculateAge(2002)." years old. "."<br>";
echo "If I talk about my hobbies.".$newStudent->myHobbi("reading a novels", "playing table tennis")."<br>";
$newStudent->bye();





?>



