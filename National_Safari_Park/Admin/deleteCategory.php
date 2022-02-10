<?php session_start();
    include_once ("includes/database.php");
    if (isset($_GET['category_Id'])){
         $delete_query = "DELETE FROM `categories` WHERE `category_Id` = ".$_GET['category_Id'];
         if (mysqli_query($con,$delete_query)){
             $_SESSION['successMessage'] = "Category Deleted from Database.";
             header("location:categoryList.php");
         }else{
             echo "Something went wrong.".mysqli_error($con);
         }
    }


