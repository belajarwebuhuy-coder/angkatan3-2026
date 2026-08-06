<?php
    session_start();
    // echo $_SESSION['NAME'];
    
    include 'config/koneksi.php';

    $queryTotalUser = mysqli_query($conn, "SELECT COUNT(*) AS total FROM users");
    $totalUser = mysqli_fetch_assoc($queryTotalUser);
    $queryTotalSlider = mysqli_query($conn, "SELECT COUNT(*) AS total FROM sliders");
    $totalSlider = mysqli_fetch_assoc($queryTotalSlider);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <?php
        include "inc/css.php";
    ?>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php
    include "inc/sidebar.php";
    ?>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                                height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <?php
        include "inc/navbar.php";
        ?>
                <!-- End Navbar -->
            </div>

            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div>
                            <h3 class="fw-bold mb-3">Dashboard</h3>
                            <!-- <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6> -->
                        </div>
                        <div class="ms-md-auto py-2 py-md-0">
                            <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                            <a href="#" class="btn btn-primary btn-round">Add Customer</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-2">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="mb-3 fw-bold text-end text-info">Total User</h2>
                                    <h3 class="fw-bold mb-0 text-end">
                                        <?php echo $totalUser['total']; ?></h3>
                                    <!-- <p class="text-primary mb-0 small">+5% since last month</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="mb-3 fw-bold text-end text-info">Total Slider</h2>
                                    <h3 class="fw-bold mb-0 text-end">
                                        <?php echo $totalSlider['total']; ?></h3>
                                    <!-- <p class="text-primary mb-0 small">+5% since last month</p> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-sm-6 col-md-2">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="mb-3 fw-bold text-end">Total User</h2>
                                    <h3 class="fw-bold mb-0 text-end">
                                        <?php echo $totalUser['total']; ?></h3>
                                    <p class="text-primary mb-0 small">+5% since last month</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid d-flex justify-content-between">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="http://www.themekita.com">
                                    ThemeKita
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> Help </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> Licenses </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        2024, made with <i class="fa fa-heart heart text-danger"></i> by
                        <a href="http://www.themekita.com">ThemeKita</a>
                    </div>
                    <div>
                        Distributed by
                        <a target="_blank" href="https://themewagon.com/">ThemeWagon</a>.
                    </div>
                </div>
            </footer>
        </div>


    </div>
    <?php
  include "inc/js.php";
  ?>
</body>

</html>