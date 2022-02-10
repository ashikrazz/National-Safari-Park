<?php session_start()?>
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
                    <h1>New Ticket</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">New Ticket</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="saveTicket.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">New Ticket Information</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="customer_name">Customer Name</label>
                                <input name="customer_name" type="text" id="customer_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Customer Email</label>
                                <input name="email" type="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="postal_address">Postal Address</label>
                                <input name="postal_address" type="text" id="postal_address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="post_code">Postal Code</label>
                                <input name="post_code" type="number" id="post_code" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <input name="gender" type="text" id="gender" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="package_id">Package Name</label>
                                <select name="package_id" id="package_id" class="form-control">
                                    <option value="">Select a Package</option>
                                    <?php
                                    $ticket_query = "SELECT * FROM `ticket_packages`";
                                    $tickets = mysqli_query($con,$ticket_query);
                                    while ($ticket = mysqli_fetch_array($tickets)){
                                        ?>
                                        <option value="<?php echo $ticket['package_id'];?>">
                                            <?php echo $ticket['package_name'];?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Package Price</label>
                                <select name="price" id="price" class="form-control">
                                    <option value="">Select a Package Price</option>
                                    <?php
                                    $ticket_queries = "SELECT * FROM `ticket_packages`";
                                    $tickets_price = mysqli_query($con,$ticket_queries);
                                    while ($ticket_price = mysqli_fetch_array($tickets_price)){
                                        ?>
                                        <option value="<?php echo $ticket_price['package_id'];?>">
                                            <?php echo $ticket_price['package_name'] , "  :  " , $ticket_price['package_price'];?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="total_price">Total Amount</label>
                                <select name="total_price" id="total_price" class="form-control">
                                    <option value="">Select a Package Price in Discount </option>
                                    <?php
                                    $ticket_queries = "SELECT * FROM `ticket_packages`";
                                    $tickets_price = mysqli_query($con,$ticket_queries);
                                    while ($ticket_price = mysqli_fetch_array($tickets_price)){
                                        ?>
                                        <option value="<?php echo $ticket_price['package_price'] = $ticket_price['package_price'] - ($ticket_price['package_price'] * ($ticket_price['discount']/100));?>">
                                            <?php echo $ticket_price['package_name'] , "  :  " , $ticket_price['total_price'] = $ticket_price['package_price'];?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
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
                    <input name="save" type="submit" value="Create Ticket" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div><br><br>

<!-- /.content-wrapper -->
<?php include_once ("includes/footer.php")?>
<!-- jQuery -->
<?php include_once ("includes/script.php")?>
