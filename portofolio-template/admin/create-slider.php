<?php
    include 'config/koneksi.php';
    
    $id = isset($_GET['edit']) ? $_GET['edit'] : '';
    
    // tampilkan semuda data dari table user urutan dari terbesar ke terkecil
    $query = mysqli_query($conn, "SELECT * FROM sliders WHERE id='$id'");
    $row = mysqli_fetch_assoc($query);
    
    //Tambah User
    if (isset($_POST['save'])) {
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $btn1_text = $_POST['button1_text'];
        $btn1_link = $_POST['button1_link'];
        $btn2_text = $_POST['button2_text'];
        $btn2_link = $_POST['button2_link'];
        $image = uniqid(). '_' . $_FILES['image']['name'];
        $description = $_POST['description'];
        $isActive = $_POST['is_active'];

        /* $_FILES['image'] = [
            'name' => 'logo.png',
            'type' => 'image/png',
            'tmp_name' => 'C:\xampp\tmp\php123.tmp',
            'error' => 0,
            'size' => 125000
        ]; */
        if ($_FILES['image']['name'] != ''){
            if (!empty($row['image']) && file_exists("uploads/" . $row['image'])) {
                unlink("uploads/" . $row['image']);
            }
            $tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($tmp, "uploads/" . $image);
        } else {
            $image = $row['image'];
        };

        if ($id) {
            //update data
            $update = mysqli_query($conn, "UPDATE sliders SET 
            title = '$title',
            subtitle = '$subtitle',
            button1_text = '$btn1_text',
            button1_link = '$btn1_link',
            button2_text = '$btn2_text',
            button2_link = '$btn2_link',
            image = '$image',
            description = '$description',
            is_active = '$isActive' WHERE id='$id'");
            header('location:app.php?page=slider&update=berhasil');
        } else {
            //masukan ke dalam users sebutkan kolom di table user nilainya di ambil dari user nginput
            $insert = mysqli_query($conn, "INSERT INTO sliders 
            (title, subtitle, button1_text, button1_link, button2_text, button2_link, image, description, is_active) 
            VALUES ('$title','$subtitle','$btn1_text','$btn1_link','$btn2_text','$btn2_link','$image','$description', '$isActive')"); 
            header("location:app.php?page=slider&tambah=berhasil");
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
        <a href="app.php?page=slider" class="btn btn-primary btn-round">Back</a>
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
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Subtitle</label>
                        <input type="text" class="form-control" name="subtitle" placeholder="Enter Subtitle" required
                            value="<?php echo ($id) ? $row['subtitle'] : ''?>">
                    </div>

                    <!-- button 1 -->
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Button 1 Text</label>
                        <input type="text" class="form-control" name="button1_text" placeholder="Button 1 Text" required
                            value="<?php echo ($id) ? $row['button1_text'] : ''?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Button 1 Link</label>
                        <input type="url" class="form-control" name="button1_link" placeholder="Button 1 Link" required
                            value="<?php echo ($id) ? $row['button1_link'] : ''?>">
                    </div>

                    <!-- button2 -->
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Button 2 Text</label>
                        <input type="text" class="form-control" name="button2_text" placeholder="Button 2 Text" required
                            value="<?php echo ($id) ? $row['button2_text'] : ''?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Button 2 Link</label>
                        <input type="url" class="form-control" name="button2_link" placeholder="Button 2 Link" required
                            value="<?php echo ($id) ? $row['button2_link'] : ''?>">
                    </div>

                    <!-- image -->
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Image</label>
                        <input type="file" class="form-control" name="image" placeholder="Enter Email"
                            value="<?php echo ($id) ? $row['image'] : ''?>">
                    </div>

                    <!-- description -->
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Description</label>
                        <textarea name="description" id="" class="form-control" placeholder="Enter Description"
                            value=""><?php echo ($id) ? $row['description'] : ''?></textarea>
                    </div>

                    <!-- is Active -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="radioDefault1" value="1"
                            <?= ($id && $row['is_active'] == 1) ? "checked" : '' ?>>
                        <label class="form-check-label" for="radioDefault1">
                            Active
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="radioDefault2" value="0"
                            <?= ($id && $row['is_active'] == 0) ? "checked" : '' ?>>
                        <label class="form-check-label" for="radioDefault2">
                            Deactive
                        </label>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary w-100" name="save" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>