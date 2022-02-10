<?php session_start();
include_once ("includes/database.php");

if (isset($_POST['save'])){
    extract($_REQUEST);
    $query = "INSERT INTO `tickets` (`customer_name`,`email`,`postal_address`,`post_code`,`gender`,`package_id`,`total_price`) VALUES ('$customer_name','$email','$postal_address','$post_code','$gender','$package_id','$total_price')";
    if (mysqli_query($con,$query)){
        $_SESSION['successMessage'] = "New Ticket created and sorted into Database";
        header("location: ticketList.php");
    }else{
        echo "You have an error.".mysqli_error($con);
    }
}