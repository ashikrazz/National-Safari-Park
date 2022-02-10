<?php session_start()?>
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
                    <h1>New Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Create New Admin</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="saveUser.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">New Admin Information</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="user_name">Full Name</label>
                                <input name="user_name" type="text" id="user_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">User Email</label>
                                <input name="email" type="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" type="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input name="phone_number" type="text" id="phone_number" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" class="form-control" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="user_type">User Type</label>
                                <input name="user_type" type="text" id="user_type" class="form-control" required>
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
                    <input name="save" type="submit" value="Create Admin" class="btn btn-success float-right">
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