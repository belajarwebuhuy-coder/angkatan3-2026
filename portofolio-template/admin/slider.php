<?php
    include 'config/koneksi.php';
    
    //tampilkan semuda data dari table user urutan dari terbesar ke terkecil
    $query = mysqli_query($conn, "SELECT * FROM sliders ORDER BY id DESC");
    $rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
    
    //jika params delete ada
    if (isset($_GET['delete'])) {
        $id = (int) $_GET['delete'];

        $query = mysqli_query($conn, "SELECT * FROM sliders WHERE id='$id'");
        $row = mysqli_fetch_assoc($query);

        if (!empty($row['image']) && file_exists("uploads/" . $row['image'])) {
            unlink("uploads/" . $row['image']);
        }

        mysqli_query($conn, "DELETE FROM sliders WHERE id='$id'");
        header('location:app.php?page=slider&hapus=berhasil');
    }
    
?>

<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
        <h3 class="fw-bold mb-3">Slider</h3>
        <!-- <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6> -->
    </div>
    <div class="ms-md-auto py-2 py-md-0 ">
        <!-- <a href="#" class="btn btn-label-info btn-round me-2">Manage</a> -->
        <a href="app.php?page=create-slider" class="btn btn-primary btn-round">Create New Slider</a>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Button 1 Text</th>
                            <th>Button 1 Link</th>
                            <th>Button 2 Text</th>
                            <th>Button 1 Link</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                    <tbody>
                        <?php foreach ($rows as $index => $row): ?>
                        <tr>
                            <td><?php echo $index += 1 ?></td>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['subtitle'] ?></td>
                            <td><?php echo $row['button1_text'] ?></td>
                            <td><?php echo $row['button1_link'] ?></td>
                            <td><?php echo $row['button2_text'] ?></td>
                            <td><?php echo $row['button2_link'] ?></td>
                            <td><img src="uploads/<?= $row['image']; ?>" width="100" height="80" alt="Image"></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['is_active'] == 1 ? 'Active' :'Deactive' ?></td>
                            <td>
                                <a class="btn btn-success btn-sm"
                                    href="app.php?page=create-slider&edit=<?php echo $row['id']?>">Edit
                                </a>
                                <a onclick="return confirm('Are you sure wanna delete this data?')"
                                    class="btn btn-danger btn-sm"
                                    href="app.php?page=slider&delete=<?php echo $row['id']?>">Delete
                                </a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>