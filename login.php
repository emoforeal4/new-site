<?php
session_start();


// echo "<pre>";

// print_r($_SERVER);

// echo "</pre>";


$admin = "user@gmail.com";
$number = "114445555";

if ($_SERVER['REQUEST_METHOD'] == "POST") {



    $email = $_POST['email'];
    $password   = $_POST['password'];



    if ($email  == $admin && $password == $number) {

 $_SESSION["loggedin"] = "yes";

        header("Location: profile.php");
        
        exit;

    } else {
        
        $_SESSION["loggedin"] = "yes";

        header("Location: form.php");
         
        exit;
        
    }
} else {


           $_SESSION["loggedin"] = "yes";

    header("Location: form.php");
    
    exit;
}
?>