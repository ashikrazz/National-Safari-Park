<?php
session_start();
include_once("includes/database.php");
if (isset($_POST['save'])){
    extract($_REQUEST);
    $target_Directory = "event_image/";
    $upload_image = $_FILES['event_image']['tmp_name'];
    $extt = pathinfo($_FILES['event_image']['name'],PATHINFO_EXTENSION);
    $image_Name = $event_name.".".$extt;
    if (move_uploaded_file($upload_image,"event_image/".$image_Name)){
        $insert_Query = "INSERT INTO `events` (`event_name`,`event_description`,`event_image`,`event_date`) VALUES ('$event_name','$event_description','$image_Name','$event_date')";
        if (mysqli_query($con,$insert_Query)){
            $_SESSION['successMessage'] = "New Event created and stored into database";
            header("location: allEventList.php");
        } else{
            echo "You have ans error ".mysqli_error($con);
        }
    }
}