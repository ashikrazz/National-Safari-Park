<?php session_start();?>
<?php
include_once ("includes/database.php");
if (isset($_POST['save'])){
    extract($_REQUEST);
    $query = "INSERT INTO `ticket_packages` (`package_name`,`package_details`,`package_price`) VALUES ('$package_name','$package_details','$package_price')";
    if (mysqli_query($con,$query)){
        $_SESSION['successMessage'] = "New Category created and sorted into Database";
        header("location: packageList.php");
    }else{
        echo "You have an error.".mysqli_error($con);
    }
}