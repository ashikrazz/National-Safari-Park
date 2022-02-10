<?php session_start();?>
<?php include_once ("includes/database.php")?>
<!-- Head Section -->
<?php include_once ("includes/head.php")?>
<!-- Header Section -->
<?php include_once ("includes/header.php")?>
<!-- Main Sidebar Container -->
<?php include_once ("includes/sidebar.php")?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All Admins</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Admin List</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <p class="success">
                    <?php
                    if (isset($_SESSION['successMessage'])){
                        echo $_SESSION['successMessage'];
                        unset($_SESSION['successMessage']);
                    }
                    ?>
                </p>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Admin List</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            SL
                        </th>
                        <th style="width: 10%">
                            User Id
                        </th>
                        <th style="width: 20%">
                            User Name
                        </th>
                        <th style="width: 20%">
                            Email
                        </th>
                        <th style="width: 20%">
                            Phone Number
                        </th>
                        <th>
                            Address
                        </th>
                        <th style="width: 20%">
                            User Type
                        </th>
                        <th style="">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    // preparing select query for category table
                    $query = "SELECT * FROM `users` ORDER BY `user_id` DESC ";
                    $admins = mysqli_query($con,$query);
                    $count = 1;
                    while ($row = mysqli_fetch_array($admins)){
                        ?>
                        <tr>
                            <td>
                                <?php echo $count ?>
                            </td>
                            <td>
                                <a>
                                    <?php echo $row['user_id']?>
                                </a>
                            </td>
                            <td>
                                <?php echo $row['user_name']?>
                            </td>
                            <td>
                                <?php echo $row['email']?>
                            </td>
                            <td>
                                <?php echo $row['phone_number']?>
                            </td>
                            <td class="project_progress">
                                <?php echo $row['address']?>
                            </td>
                            <td>
                                <?php echo $row['user_type']?>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php
                        $count++;
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>




<!-- /.content-wrapper -->
<?php include_once ("includes/footer.php")?>
<!-- jQuery -->
<?php include_once ("includes/script.php")?>
