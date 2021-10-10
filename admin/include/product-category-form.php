
<a href="./all-product.php" class="backward"><i class="fas fa-arrow-left"></i></a>
<section class="section">
    <div class="crud-page">
        <?php
        if (isset($_POST['add'])) {

            $titlepage = $_POST['productname'];
            $content = trim($_POST['content']);
            $category = trim($_POST['selectcat']);
            $vendorcode = trim($_POST['vendorcode']);
            $keywords = $_POST['keywords'];
           
            if (isset($_FILES['image'])) {
                $filename = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_tmp = $_FILES['image']['tmp_name'];
                $file_type = $_FILES['image']['type'];
                if (isset($file_type) == "jpg") {
                    move_uploaded_file($file_tmp, "../assets/img/product/gallery/" . $file_name);
                } else {
                    echo "unknown type";
                }

                $metatitle = $_POST['metatitle'];
                $metades = $_POST['metades'];
                $metades = $_POST['metades'];

                $sql = "INSERT INTO `product_category`(`categoryname`, `categorydesc`, `categoryimage`) VALUES ('$titlepage','$category','$vendorcode','$content','$mrp','$saleprice','$filename','$status')";

                $insert = mysqli_query($conn, $sql);

                if ($insert) {


        ?>
                    <div class="success bg-success text-light p-2" style="width: 80%; border-radius:12px;">saved</div>
                    <script>
                        setTimeout(() => {
                            location.replace("./all-product.php");
                        }, 1500);
                    </script>
        <?php
                }
            }
        } ?>
        <form action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">

            <label for="title">Title</label>
            <input type="text" name="productname" placeholder="Enter page title" required>
            <label for="title">Vendor Code</label>
            <input type="text" name="vendorcode" placeholder="Add vendore code" required>
            <label for="category">Category</label>

            <select name="selectcat">
                <option value="" hidden>Choose Category</option>
                <option value="Edible Oil">Edible Oil</option>
                <option value="Essential Oil">Essential Oil</option>
            </select>
            <label for="content">Product Description</label>
            <textarea name="content" placeholder="Write product Description" required>
</textarea> <label for="title">MRP</label>
            <input type="text" name="mrp" placeholder="MRP Price" required>
            <label for="title">Sale Price</label>
            <input type="text" name="saleprice" placeholder="Sale Price" required>
            <!-- <label for="keywords">Keywords</label>
            <textarea name="keywords" id="keywords" placeholder="add keywords" required></textarea> -->

            <!-- <label for="title">Meta title</label>
            <input type="text" placeholder="Enter page title" name="metatitle" required>
            <label for="content">Meta Description</label>
            <textarea name="metades" id="metades" placeholder="Meta description" required></textarea> -->
            <label for="image">Featured image</label>
            <input type="file" name="image"> <select name="status">
                <option value="" hidden>Choose Status</option>
                <option value="Edible Oil">Publish</option>
                <option value="Essential Oil">Draft</option>
            </select>
            <button type="submit" name="add" class="border-0 p-2"> Update</button>

        </form>
    </div>
</section>