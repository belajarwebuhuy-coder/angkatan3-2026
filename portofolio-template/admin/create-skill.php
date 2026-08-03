<?php
    session_start();
    session_regenerate_id();

    include 'config/koneksi.php';
    
    $id = isset($_GET['edit']) ? $_GET['edit'] : '';
    
    // tampilkan semuda data dari table user urutan dari terbesar ke terkecil
    $query = mysqli_query($conn, "SELECT * FROM skills WHERE id='$id'");
    $row = mysqli_fetch_assoc($query);
    
    //Tambah User
    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $progress = $_POST['progress'];
        
        if ($id) {
            //update data
            $update = mysqli_query($conn, "UPDATE skills SET 
            name = '$name',
            progress = '$progress' WHERE id='$id'");
            header('location:skill.php?update=berhasil');
        } else {
            //masukan ke dalam skill sebutkan kolom di table user nilainya di ambil dari user nginput
            $insert = mysqli_query($conn, "INSERT INTO skills 
            (name,progress) 
            VALUES ('$name','$progress')"); 
            header("location:skill.php?tambah=berhasil");
        }
    };
    
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <name>Create User</name>
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
                            <img src="kaiadmin-lite-1.2.0/assets/img/kaiadmin/logo_light.svg" alt="navbar brand"
                                class="navbar-brand" height="20" />
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
                            <h3 class="fw-bold mb-3"><?php echo isset($_GET['edit'])? 'Edit Skill' : 'Create Skill' ?>
                            </h3>
                        </div>
                        <div class="ms-md-auto py-2 py-md-0">
                            <!-- <a href="#" class="btn btn-label-info btn-round me-2">Manage</a> -->
                            <a href="skill.php" class="btn btn-primary btn-round">Back</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <!-- name  -->
                                        <div class="mb-3">
                                            <label for="" class="form-label fw-bold">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                                required value="<?php echo ($id) ? $row['name'] : ''?>">
                                        </div>

                                        <!-- progress -->
                                        <div class="mb-3">
                                            <label for="" class="form-label fw-bold">Progress <span
                                                    id="progressValue"></span></label>
                                            <input type="range" class="form-range" name="progress"
                                                placeholder="Enter Progress" required id="progress"
                                                value="<?php echo ($id) ? $row['progress'] : ''?>">
                                        </div>

                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100" name="save"
                                                type="submit">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class=" footer">
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

    <?php include "inc/js.php"; ?>

    <script>
    // const progress = document.getElementById("progress");
    // const progressValue = document.getElementById("progressValue");

    // progressValue.textContent = progress.value + "%";

    // progress.addEventListener("input", function() {
    //     progressValue.textContent = thus.value;
    // });

    const slider = document.getElementById("progress");
    const bubble = document.getElementById("progressValue");

    function updateBubble() {
        const value = slider.value;
        const min = slider.min ? slider.min : 0;
        const max = slider.max ? slider.max : 100;

        const percent = (value - min);

        bubble.innerHTML = value + "%";
        // bubble.style.right = `calc(${percent}% + (${8 - percent * 0.15}px))`;
    }

    slider.addEventListener("input", updateBubble);

    updateBubble();
    </script>
</body>

</html>