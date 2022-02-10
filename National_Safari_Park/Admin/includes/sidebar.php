<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">National Safari Park</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/Admin.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin Panel</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="dashboard.php" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            Park Admin
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="newUser.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="adminList.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Admin List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fab fa-buffer"></i>
                        <p>
                            Animals Categories
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="add_Category.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="categoryList.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Animals Category</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-paw"></i>
                        <p>
                            Animals Section
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="addAnimalPost.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Animal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="allAnimalList.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Animals List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Events Section
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="add_New_Event.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Event</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="allEventList.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Events List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-ticket-alt"></i>
                        <p>
                            Tickets Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="add_New_Package.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Package</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="packageList.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Packages List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="addTicket.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Tickets</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="ticketList.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Tickets List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="sendEmail.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Send Email to Customer</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>