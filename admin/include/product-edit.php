<?php

$title = "Update service";

include("./include/header.php") ?>

<a href="./all-service.php" class="backward"><i class="fas fa-arrow-left"></i></a>
<section class="section">
    <div class="crud-page">
        <?php
        if (isset($_GET['edit'])) {

            $id = $_GET['edit'];

            if (isset($_POST['submit'])) {
                if (isset($_FILES['image'])) {

                    $filename = $_FILES['image']['name'];
                    $file_size = $_FILES['image']['size'];
                    $file_tmp = $_FILES['image']['tmp_name'];
                    $file_type = $_FILES['image']['type'];

                    move_uploaded_file($file_tmp, "../assets/images/gallery/" . $filename);
                }
                $titlepage = $_POST['service_title'];
                $content = mysqli_escape_string($conn,$_POST['content']);
                $keywords = $_POST['keywords'];
                $metatitle = $_POST['metatitle'];
                $metades = $_POST['metades'];
                $query = "UPDATE `services` SET `servicename`='$titlepage',`servicemetades`='$metades',`servicemetatitle`='$metatitle',`serviceimage`='$filename',`content`=$content,`keywords`='$keywords',WHERE `id`='$id'";
                $run = mysqli_query($conn, $query);
                if ($run) { ?>
                    <div class="success bg-success text-light p-2" style="width: 80%; border-radius:12px;">Updated</div>

                    <script>
                        setTimeout(() => {
                            location.replace("./all-service.php");
                        }, 1500);
                    </script>
                <?php
                } else {
                    echo "error founded" . $query . mysqli_error($conn);
                }
            }
            // echo $id;
            $query = "SELECT * FROM `services` WHERE id ='$id'";
            $run = mysqli_query($conn, $query);
            if (mysqli_num_rows($run) == 1) {
                $Data = mysqli_fetch_array($run, MYSQLI_ASSOC);
                ?>
                <form action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">

                    <label for="title">Title</label>
                    <input type="text" name="service_title" placeholder="Enter page title" value="<?php echo $Data['servicename']; ?>" required>
                    <label for="content">Content</label>
                    <textarea name="content" placeholder="start writing your HTML here!" required>
                <?php echo $Data['content']; ?>
                </textarea>
                    <label for="keywords">Keywords</label>
                    <textarea name="keywords" id="keywords" placeholder="add keywords" required><?php echo $Data['keywords']; ?></textarea>
                    <label for="title">Meta title</label>
                    <input type="text" placeholder="Enter page title" name="metatitle" value="<?php echo mysqli_escape_String($conn, $Data['servicemetatitle']); ?>" required>
                    <label for="content">Meta Description</label>
                    <textarea name="metades" id="metades" placeholder="Meta description" required><?php echo mysqli_escape_String($conn, $Data['servicemetades']); ?></textarea>
                    <label for="image">Featured image</label>
                    <input type="file" name="image">
                    <span class="selectedimage"><?php echo $Data['serviceimage']; ?></span>
                    <button type="submit" name="submit" class="border-0 p-2"> Update</button>
                </form>
            <?php } ?>
        <?php
        }

        ?>
    </div>
</section>
<?php include("./include/footer.php") ?>