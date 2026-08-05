<?php

    include 'config/koneksi.php';
    
    $id = isset($_GET['edit']) ? $_GET['edit'] : '';
    
    // tampilkan semuda data dari table user urutan dari terbesar ke terkecil
    $query = mysqli_query($conn, "SELECT * FROM resume WHERE id='$id'");
    $row = mysqli_fetch_assoc($query);
    
    //Tambah User
    if (isset($_POST['save'])) {
        $title = $_POST['title'];
        $year_start = $_POST['year_start'];
        $year_end = $_POST['year_end'];
        $subtitle = $_POST['subtitle'];
        $description = $_POST['description'];
        
        if ($id) {
            //update data
            $update = mysqli_query($conn, "UPDATE resume SET 
            title = '$title',
            year_start = '$year_start',
            year_end = '$year_end',
            subtitle = '$subtitle',
            description = '$description'  WHERE id='$id'");
            header('location:app.php?page=resume&update=berhasil');
        } else {
            //masukan ke dalam users sebutkan kolom di table user nilainya di ambil dari user nginput
            $insert = mysqli_query($conn, "INSERT INTO resume 
            (title, year_start, year_end ,subtitle, description) 
            VALUES ('$title','$year_start','$year_end','$subtitle','$description')"); 
            header("location:app.php?page=resume&tambah=berhasil");
        }
    };
    
    
?>

<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
        <h3 class="fw-bold mb-3"><?php echo isset($_GET['edit'])? 'Edit Slider' : 'Create Slider' ?>
        </h3>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <!-- <a href="#" class="btn btn-label-info btn-round me-2">Manage</a> -->
        <a href="app.php?page=resume" class="btn btn-primary btn-round">Back</a>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title" required
                            value="<?php echo ($id) ? $row['title'] : ''?>">
                    </div>

                    <!-- Year -->
                    <!-- <div class="mb-3">
                                            <label for="" class="form-label fw-bold">Year Start</label>
                                            <input type="number" class="form-control" name="year_start"
                                                placeholder="Enter Year Start" required
                                                value="<?php echo ($id) ? $row['year_start'] : ''?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label fw-bold">Year End</label>
                                            <input type="number" class="form-control" name="year_end"
                                                placeholder="Enter Year End" required
                                                value="<?php echo ($id) ? $row['year_end'] : ''?>">
                                        </div> -->

                    <!-- subtitle -->
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Subtitle</label>
                        <input type="text" class="form-control" name="subtitle" placeholder="Enter Subtitle" required
                            value="<?php echo ($id) ? $row['subtitle'] : ''?>">
                    </div>
                    <!-- description -->
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Description</label>
                        <textarea name="description" id="" class="form-control" placeholder="Enter Description"
                            value=""><?php echo ($id) ? $row['description'] : ''?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Year Start</label>
                        <select name="year_start" id="year_start" class="form-select"></select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Year End</label>
                        <select name="year_end" id="year_end" class="form-select"></select>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary w-100" name="save" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>