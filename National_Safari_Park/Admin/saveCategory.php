<?php session_start();?>
<?php
include_once ("includes/database.php");

if (isset($_POST['save'])){
    $categoryName = $_POST['categoryName'];
    $categoryDescription = $_POST['categoryDescription'];
    $query = "INSERT INTO `categories` (`category_Name`,`category_Description`) VALUES ('$categoryName','$categoryDescription')";
    if (mysqli_query($con,$query)){
       $_SESSION['successMessage'] = "New Category created and sorted into Database";
       header("location: categoryList.php");
    }
    else{
        echo "You have an error.".mysqli_error($con);
    }
    $con->close();
}