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
                    <h1>New Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">New Category</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="saveCategory.php" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">New Category Information</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="categoryName">Category Name</label>
                            <input name="categoryName" type="text" id="categoryName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="categoryDescription">Category Description</label>
                            <textarea name="categoryDescription" id="categoryDescription" class="form-control" rows="4"></textarea>
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
                <input name="save" type="submit" value="Create Category" class="btn btn-success float-right">
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
