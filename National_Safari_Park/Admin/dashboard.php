<?php session_start();
include_once ("includes/database.php");
include_once ("includes/head.php")?>
<?php include_once ("includes/header.php")?>

    <!-- Main Sidebar Container -->
    <?php include_once ("includes/sidebar.php")?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
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
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <?php
                        $query = "SELECT * FROM `categories` ORDER BY `category_Id` DESC LIMIT 1";
                        $categories = mysqli_query($con,$query);
                        $category = mysqli_fetch_array($categories);
                        ?>
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?php echo $category["category_Id"];?></h3>
                                <p>Animal Categories</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fab fa-buffer"></i>
                            </div>
                            <a href="categoryList.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <?php
                        $query = "SELECT * FROM `animals` ORDER BY `animal_id` DESC LIMIT 1";
                        $categories = mysqli_query($con,$query);
                        $category = mysqli_fetch_array($categories);
                        ?>
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?php echo $category["animal_id"];?></h3>
                                <p>Animals</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-paw"></i>
                            </div>
                            <a href="allAnimalList.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <?php
                        $query = "SELECT * FROM `events` ORDER BY `event_id` DESC LIMIT 1";
                        $events = mysqli_query($con,$query);
                        $event = mysqli_fetch_array($events);
                        ?>
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><?php echo $event['event_id'];?></h3>

                                <p>Upcoming Events</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon far fa-calendar-alt"></i>
                            </div>
                            <a href="allEventList.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <?php
                        $query = "SELECT * FROM `tickets` ORDER BY `ticket_id` DESC LIMIT 1";
                        $tickets = mysqli_query($con,$query);
                        $ticket = mysqli_fetch_array($tickets);
                        ?>
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><?php echo $ticket['ticket_id'];?></h3>

                                <p>Booked Tickets</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-ticket-alt"></i>
                            </div>
                            <a href="ticketList.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include_once ("includes/footer.php")?>
    <!-- jQuery -->
    <?php include_once ("includes/script.php")?>
