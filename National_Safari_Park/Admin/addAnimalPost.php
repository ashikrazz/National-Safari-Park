<?php session_start();?>
<?php include_once ("includes/database.php")?>
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
                    <h1>New Animal</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">New Animal</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="saveAnimal.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">New Animal Information</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="category_Id">Animal Category</label>
                                <select name="category_Id" id="category_Id" class="form-control">
                                    <option value="">Select a Category</option>
                                <?php
                                    $query = "SELECT * FROM `categories`";
                                    $categories = mysqli_query($con,$query);
                                    while ($category = mysqli_fetch_array($categories)){
                                       ?>
                                        <option value="<?php echo $category['category_Id'];?>">
                                            <?php echo $category['category_Name'];?>
                                        </option>
                                <?php
                                    }
                                ?>
                                           </select>
                            </div>
                            <div class="form-group">
                                <label for="animal_title">Animal Title</label>
                                <input name="animal_title" type="text" id="animal_title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="animal_image">Animal Image</label>
                                <input name="animal_image" type="file" id="animal_image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="animal_details">Animal Details</label>
                                <textarea name="animal_details" id="animal_details" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
                    <input name="save" type="submit" value="Add Animal" class="btn btn-success float-right">
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
