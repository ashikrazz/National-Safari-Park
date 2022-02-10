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
                        <h1>New Events</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active">New Events</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="saveEvent.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">New Events Information</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="event_name">Event Name</label>
                                    <input name="event_name" type="text" id="event_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="event_description">Event Description</label>
                                    <textarea name="event_description" id="event_description" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="event_image">Event Image</label>
                                    <input name="event_image" type="file" id="event_image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="event_date">Event Date</label>
                                    <input name="event_date" type="date" id="event_date" class="form-control">
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
                        <input name="save" type="submit" value="Add Event" class="btn btn-success float-right">
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