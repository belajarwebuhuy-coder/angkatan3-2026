<?php

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
            header('location:app.php?page=skill&update=berhasil');
        } else {
            //masukan ke dalam skill sebutkan kolom di table user nilainya di ambil dari user nginput
            $insert = mysqli_query($conn, "INSERT INTO skills 
            (name,progress) 
            VALUES ('$name','$progress')"); 
            header("location:app.php?page=skill&tambah=berhasil");
        }
    };
    
    
?>

<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
        <h3 class="fw-bold mb-3"><?php echo isset($_GET['edit'])? 'Edit Skill' : 'Create Skill' ?>
        </h3>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <!-- <a href="#" class="btn btn-label-info btn-round me-2">Manage</a> -->
        <a href="app.php?page=skill" class="btn btn-primary btn-round">Back</a>
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
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required
                            value="<?php echo ($id) ? $row['name'] : ''?>">
                    </div>

                    <!-- progress -->
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Progress <span id="progressValue"></span></label>
                        <input type="range" class="form-range" name="progress" placeholder="Enter Progress" required
                            id="progress" value="<?php echo ($id) ? $row['progress'] : ''?>">
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary w-100" name="save" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>