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
                    <h1>All Tickets</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tickets</li>
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
                <h3 class="card-title">Tickets</h3>

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
                        <th style="width: 6%">
                            Ticket Id
                        </th>
                        <th style="width: 10%">
                            Customer Name
                        </th>
                        <th style="width: 10%">
                            Customer Email
                        </th>
                        <th style="width: 10%">
                            Postal Address
                        </th>
                        <th style="width: 10%">
                            Post Code
                        </th>
                        <th style="width: 10%">
                            Gender
                        </th>
                        <th style="width: 7%">
                            Package ID
                        </th>
                        <th style="width: 10%">
                            Package Name
                        </th>
                        <th style="width: 10%">
                            Package Price
                        </th>
                        <th style="width: 7%">
                            Discount
                        </th>
                        <th style="width: 10%">
                            Ticket Price
                        </th>
                        <th style="width: 10%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    // preparing select query for category table
                    $query = "SELECT * FROM `tickets` as t,`ticket_packages` as tp WHERE t.package_id  = tp.package_id  ORDER BY `ticket_id` DESC ";
                    $packages = mysqli_query($con,$query);
                    $count = 1;
                    while ($row = mysqli_fetch_array($packages)){
                        ?>
                        <tr>
                            <td>
                                <?php echo $count ?>
                            </td>
                            <td>
                                <a>
                                    <?php echo $row['ticket_id']?>
                                </a>
                            </td>
                            <td>
                                <?php echo $row['customer_name']?>
                            </td>
                            <td class="project_progress">
                                <?php echo $row['email']?>
                            </td>
                            <td>
                                <a>
                                    <?php echo $row['postal_address']?>
                                </a>
                            </td>
                            <td>
                                <a>
                                    <?php echo $row['post_code']?>
                                </a>
                            </td>
                            <td>
                                <a>
                                    <?php echo $row['gender']?>
                                </a>
                            </td>
                            <td>
                                <a>
                                    <?php echo $row['package_id']?>
                                </a>
                            </td>
                            <td>
                                <a>
                                    <?php echo $row['package_name']?>
                                </a>
                            </td>
                            <td>
                                <a>
                                    <?php echo $row['package_price']?> BDT
                                </a>
                            </td>
                            <td>
                                <a>
                                    <?php echo $row['discount']?> %
                                </a>
                            </td>
                            <td>
                                <a>
                                    <?php echo $row['total_price']?> BDT
                                </a>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
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
