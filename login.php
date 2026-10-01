<?php
session_start();

if (isset($_SESSION['isLoggedIn' == true])) {

    if ($_SESSION['isLoggedIn'] == "YES") {
        header("Location: profile.php");
        exit;
    }
};



// echo "<pre>";

// print_r($_SERVER);

// echo "</pre>";







$admin = "user@gmail.com";
$number = "12345678";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (empty($_POST['u_name']) == true) {

        $_SESSION['username_err'] = "Username is requied";
        header("Location: form.php");
        exit;
    }

    $email = $_POST['email'];
    $password   = $_POST['password'];



    if ($email  == $admin && $password == $number) {

        $_SESSION["isLoggedIn"] = "YES";
        $_SESSION['u_name'] = $_POST['u_name'];

        header("Location: profile.php");

        exit;
    } else {

        $_SESSION['error'] = "login failed, email or password is worng";

        header("Location: form.php");

        exit;
    }
} else {


    $_SESSION["isLoggedIn"] = "NO";

    header("Location: form.php");

    exit;
}
