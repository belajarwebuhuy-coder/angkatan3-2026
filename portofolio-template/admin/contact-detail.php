<?php

    include 'config/koneksi.php';
    
    //tampilkan semuda data dari table user urutan dari terbesar ke terkecil
    $id = isset($_GET['detail']) ? $_GET['detail'] : '';

    $query = mysqli_query($conn, "SELECT * FROM contacts WHERE id='$id' ");
    $row = mysqli_fetch_assoc($query);

    //jika params delete ada
    if (isset($_GET['delete'])) {
        $delete = $_GET['delete'];
        $delete = mysqli_query($conn, "DELETE FROM users WHERE id='$delete'");
        header('location:user.php?hapus=berhasil');
    }
    
?>

<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
        <h3 class="fw-bold mb-3">Contact Detail</h3>
        <!-- <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6> -->
    </div>
    <div class="ms-md-auto py-2 py-md-0 ">
        <!-- <a href="#" class="btn btn-label-info btn-round me-2">Manage</a> -->
        <a href="contact.php" class="btn btn-primary btn-round">Back</a>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="" class="fw-bold">Name</label>
                        <input type="text" readonly class="form-control" value="<?php echo ($id) ? $row['name'] : ''?>">
                    </div>
                    <div class="col-md-4" class="fw-bold>
                                            <label for="">Email</label>
                                            <input type=" text" readonly class="form-control"
                        value="<?php echo ($id) ? $row['email'] : ''?>">
                    </div>
                    <div class="col-md-4" class="fw-bold>
                                            <label for="">Subject</label>
                                            <input type=" text" readonly class="form-control"
                        value="<?php echo ($id) ? $row['subject'] : ''?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="" class="fw-bold">Message</label>
                        <textarea type="text" readonly class="form-control"
                            value=""><?php echo ($id) ? $row['message'] : ''?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>