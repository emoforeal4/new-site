<?php

// indexed array
$student = [ "Eman" , "Arfaa" , "Aqsa", "Alina"];
 
 echo "<pre>";

 print_r($student);
 
 echo  $student[1];

 echo "<br><br>";

 foreach ($student as $student1 ) {
 
 echo $student1 . "<br>";

 };

  echo "</pre>";

//   Associative Array

$students = [ 
     "name" => "eman", 
     "age" => 17, 
     "course" => "Computer Science" 
  ]; 

   echo "<pre>";

 print_r($students);
 
 echo "<br>";

 echo  $students["name"];

  echo "<br>";

 foreach ($students as $k => $v) {
 
 echo "$k : $v <br>";

 }
  echo "</pre>";

  //Multidimensional Array 

  $studentlist =[
    ["Ali" , 19 , "inter"],
     ["Sara", 30, "Designer"], 
    [ "Hassan" , 17 , "designing"]
  ];
  echo $studentlist[0][1];


?>
