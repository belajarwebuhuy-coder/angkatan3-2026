<?php
    // echo $_SESSION['NAME'];
    
    include 'config/koneksi.php';

    $queryTotalUser = mysqli_query($conn, "SELECT COUNT(*) AS total FROM users");
    $totalUser = mysqli_fetch_assoc($queryTotalUser);
    $queryTotalSlider = mysqli_query($conn, "SELECT COUNT(*) AS total FROM sliders");
    $totalSlider = mysqli_fetch_assoc($queryTotalSlider);
?>

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