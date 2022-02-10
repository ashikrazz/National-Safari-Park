<?php
session_start();
include_once("includes/database.php");


if (isset($_POST['update'])){
    extract($_REQUEST);
    $update_query = "UPDATE `categories` SET `category_Name` = '$categoryName', `category_Description` = '$categoryDescription' WHERE `category_ID`=$category_Id";
    if (mysqli_query($con,$update_query)){
        $_SESSION['successMessage'] = "Category Information updated into Database";
        header("location: categoryList.php");
    } else{
        echo "You have an error.".mysqli_error($con);
    }
}

if (isset($_GET['category_Id'])){
    $c_id = $_GET['category_Id'];
    $query = "SELECT * from `categories` WHERE `category_Id`=".$_GET['category_Id'];
    $result = mysqli_query($con,$query);
    if (mysqli_query($con,$query)){
       $category = mysqli_fetch_array($result);
       ?>

        <!-- Head Section -->
        <?php include_once ("includes/head.php")?>
        <!-- Header Section -->
        <?php include_once ("includes/header.php")?>
        <!-- Main Sidebar Container -->
        <?php include_once ("includes/sidebar.php")?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Category</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Edit Category</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form action="editCategory.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Category Information</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input type="hidden" name="category_Id" value="<?php echo $category['category_Id']?>">
                                    <div class="form-group">
                                        <label for="categoryName">Category Name</label>
                                        <input value="<?php echo $category['category_Name']?>" name="categoryName" type="text" id="categoryName" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="categoryDescription">Category Description</label>
                                        <textarea  name="categoryDescription" id="categoryDescription" class="form-control" rows="4"><?php echo $category['category_Description']?></textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="#" class="btn btn-secondary">Cancel</a>
                            <input name="update" type="submit" value="Update Category" class="btn btn-success float-right">
                        </div>
                    </div>
                </form
            </section>
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->
        <?php include_once ("includes/footer.php")?>
        <!-- jQuery -->
        <?php include_once ("includes/script.php")?>


        <?php

    }
}