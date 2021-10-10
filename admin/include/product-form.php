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
            $mrp = $_POST['mrp'];
            $saleprice = $_POST['saleprice'];
            $status = $_POST['status'];
            if (isset($_FILES['image'])) {
                $filename = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_tmp = $_FILES['image']['tmp_name'];
                $file_type = $_FILES['image']['type'];
                echo $filename;
                if (isset($file_type) == "jpg" && isset($file_type) == "png") {
                    move_uploaded_file($file_tmp, "../assets/img/product/gallery/" . $filename);
                } else {
                    echo "unknown type";
                }
            }
            $metatitle = $_POST['metatitle'];
            $metades = $_POST['metades'];
            $metades = $_POST['metades'];

            $sql = "INSERT INTO `product`(`Product_name`, `category`,`vendorcode`, `product_description`, `MRP`, `saleprice`, `featuredimage`, `status`) VALUES ('$titlepage','$category','$vendorcode','$content','$mrp','$saleprice','$filename','$status')";

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
            }else{
                echo mysqli_error($conn);
            }
        }  ?>
        <form action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">

            <label for="title">Product Name</label>
            <input type="text" name="productname" placeholder="Enter Product Name" required>
            <label for="title">Vendor Code</label>
            <input type="text" name="vendorcode" placeholder="Add vendore code" required>
            <label for="category">Category</label>

            <select name="selectcat">
                <option value="" hidden>Choose Category</option>
                <option value="edible">Edible Oil</option>
                <option value="honey">Honey</option>
                <option value="essentialoil">Essential Oil</option>
                <option value="herbalvenagar">Herbal Venagar</option>
                <option value="herbalpak">Herbal Pak</option>
                <option value="herbalhoney">Herbal Honey</option>
                <option value="herbalwater">Herbal Water</option>
                <option value="tea">Tea</option>
                <option value="haldi">Haldi</option>
                <option value="ghee">Ghee</option>
                <option value="garammasala">Garam Masala</option>
            </select>
            <label for="content">Product Description</label>
            <textarea name="content" placeholder="Write product Description" required>
</textarea> <label for="title">MRP</label>
            <input type="text" name="mrp" placeholder="MRP Price" required>
            <label for="title">Sale Price</label>
            <input type="text" name="saleprice" placeholder="Sale Price" required>
            <label for="keywords">Keywords</label>
            <textarea name="keywords" id="keywords" placeholder="add keywords" required></textarea>

            <label for="title">Meta title</label>
            <input type="text" placeholder="Enter page title" name="metatitle" required>
            <label for="content">Meta Description</label>
            <textarea name="metades" id="metades" placeholder="Meta description" required></textarea>
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