<?php
session_start();
include_once ("includes/database.php");
if (isset($_POST['login'])){

    extract($_REQUEST);

    $en_pass = md5($password);
    $login_query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$en_pass' AND `user_type` = 'Admin'";
    $result = mysqli_query($con,$login_query);
    $num_of_rows = mysqli_num_rows($result);
    if ($num_of_rows == 1){
        $_SESSION['login'] = true;
        $_SESSION['user_type'] = 'Admin';
        $_SESSION['successMessage'] = "Login Successful";
        header("location: dashboard.php");
    }else{
        $_SESSION['errorMessage'] = "Invalid Credential";
        header("location: login_form.php");
    }
}
