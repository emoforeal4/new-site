<?php
$name = $_FILES['images']['name'];
$path = $_FILES['images']['tmp_name'];
$size = $_FILES['images']['size'];
$size_limit= 2 * 1024 * 1024;

// echo "<pre>";

// print_r($_FILES);

// echo "</pre>"

$allowed_exts = ['jpg', 'jpeg', 'png'];
$ext =  pathinfo($name, PATHINFO_EXTENSION  );

if( in_array( $ext, $allowed_exts) == false ) {
    die("selected file type is not allowed");
} 


if($size > $size_limit) {
    die("File size should be grater than 2mb");
}


$new = "uploads/" . uniqid() . ".$ext";


move_uploaded_file($path, $new);

?>