<?php
session_start();
include_once("includes/database.php");

if(isset($_POST['save'])){
    extract($_REQUEST);
    $target_directory = "animal_image/";
    $uploaded_image = $_FILES['animal_image']['tmp_name'];
    $ext = pathinfo($_FILES['animal_image']['name'],PATHINFO_EXTENSION);
    $image_name = $animal_title.".".$ext;
    if(move_uploaded_file($uploaded_image,"animal_image/".$image_name)){

        $insert_query = "INSERT INTO `animals` (`animal_title`,`category_Id`,`animal_image`,`animal_details`) VALUES ('$animal_title',$category_Id,'$image_name','$animal_details')";
        if(mysqli_query($con,$insert_query)){
            $_SESSION['successMessage'] = "New animal created and stored into database";
            header("location: allAnimalList.php");
        }else{
            echo "You have ans error ".mysqli_error($con);
        }
    }
}