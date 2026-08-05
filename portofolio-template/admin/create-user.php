<?php

    include 'config/koneksi.php';
    
    $id = isset($_GET['edit']) ? $_GET['edit'] : '';
    
    // tampilkan semuda data dari table user urutan dari terbesar ke terkecil
    $query = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
    $row = mysqli_fetch_assoc($query);
    
    //Tambah User
    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'] ? $_POST['password'] : $row['password'];

        $checkEmail = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
        $showEmail = mysqli_fetch_assoc($checkEmail);

        if ($id) {
        // Edit -> abaikan email milik sendiri
        $checkEmail = mysqli_query($conn, "SELECT id FROM users WHERE email='$email' AND id != '$id'");
        } else {
            // Tambah
            $checkEmail = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
        }
        
        if (mysqli_num_rows($checkEmail) > 0) {
        header("Location:app.php?page=create-user" . ($id ? "?edit=$id&email=gagal" : "?email=gagal"));
        exit;
    }
        
        if ($id) {
            //update data
            //kalau password diisi
            if (!empty($password)) {
            $pass = sha1($password);

            mysqli_query($conn, "UPDATE users SET
                name='$name',
                email='$email',
                password='$pass'
                WHERE id='$id'");
            } else {
                // Password kosong -> jangan diubah
                mysqli_query($conn, "UPDATE users SET
                    name='$name',
                    email='$email'
                    WHERE id='$id'");
            }
    
            header("location:app.php?page=user&update=berhasil");
            exit;
        }
            $pass = sha1($password);
            //masukan ke dalam users sebutkan kolom di table user nilainya di ambil dari user nginput
            $insert = mysqli_query($conn, "INSERT INTO users (name, email, password) VALUES ('$name','$email','$pass')"); 
            header("location:app.php?user&tambah=berhasil");
            exit;
        
    };
      
?>

<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
        <h3 class="fw-bold mb-3"><?php echo isset($_GET['edit'])? 'Edit User' : 'Create User' ?>
        </h3>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
        <!-- <a href="#" class="btn btn-label-info btn-round me-2">Manage</a> -->
        <a href="app.php?page=user" class="btn btn-primary btn-round">Back</a>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <?php if (isset($_GET['email']) && $_GET['email'] == 'gagal'){
                                        
                ?>
                <div class="alert alert-danger" role="alert">
                    Email Telah Digunakan
                </div>
                <?php
                }
                ?>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required
                            value="<?php echo ($id) ? $row['name'] : ''?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email" required
                            value="<?php echo ($id) ? $row['email'] : ''?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">
                            <?php echo ($id) ? 'Password   <small class="text-secondary">(leave blank if you do nott wish to change it)</small>' : 'Password'
                                                ?>
                        </label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password" <?php echo ($id) ? '' : 'required'
                                                ?>>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" name="save" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>