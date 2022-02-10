<?php
include_once ("includes/database.php");
if (isset($_POST['save'])){
    extract($_REQUEST);
    $insert_query = "INSERT INTO `users` (`user_name`,`email`,`password`,`phone_number`,`address`,`user_type`) VALUES ('$user_name','$email','".md5($password)."','$phone_number','$address','$user_type' )";
    if (mysqli_query($con,$insert_query)){
        $_SESSION['successMessage'] = "New Admin created and stored into database";
        header("location:adminList.php");
    } else{
        echo "Error".mysqli_error($con);
    }
}