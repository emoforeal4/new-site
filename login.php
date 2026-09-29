<?php

// echo "<pre>";

// print_r($_SERVER);

// echo "</pre>";


$admin = "user@gmail.com";
$number = "114445555";

if ($_SERVER['REQUEST_METHOD'] == "POST") {



    $email = $_POST['email'];
    $password   = $_POST['password'];



    if ($email  == $admin && $password == $number) {

        header("Location: profile.php");
        
        exit;

    } else {
        
        header("Location: form.php");
         
        exit;

    }
    } else {

    header("Location: form.php");
    
    exit;

    }




    if ($_SERVER['REQUEST_METHOD'] == "post") {   

      $user = "user@gmail.com";
      $number = "114445555";
      if ($email == $user && $password == $number) {
        
      header("Location: profile.php");

      exit;
      
      }else{
        
      }
  
    }
?>