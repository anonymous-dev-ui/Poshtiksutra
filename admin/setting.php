<?php
$title = "Settings";
include("include/header.php");
$sql = "SELECT * FROM `main_profile` WHERE id =1";
$fetch_profile = mysqli_query($conn, $sql);
$add_data = mysqli_fetch_array($fetch_profile, MYSQLI_ASSOC);

?>
<style>
    /* setting page  */
    .settingbox {
        width: 100%;
        min-height: 70vh;
        display: flex;
        justify-content: flex-start;
        align-items: flex-start;
        flex-direction: column;
    }

    .settingbox>form {
        width: 100%;
        min-height: 50vh;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        background-color: #fff;
        box-shadow: 0 0 40px -29px #000;
        border-radius: 12px;
        padding: 15px;
        margin: 20px 0;
    }

    .settingbox>form>ul {
        padding: 0;
        width: 100%;
        min-height: fit-content;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        line-height: 2em;
    }

    .settingbox>form>ul>li {
        border: 1px solid #f2f2f2;

        padding: 5px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;

    }

    .settingbox>form>ul>li.selectedimage{
        justify-content: center;
        background-color: #008000;
        color: #fff;
    }
    .settingbox>form>ul>li>span.item:nth-child(1) {
        width: 30%;
        font-weight: 500;
    }

    .settingbox>form>ul>li>span.item:nth-child(1)>img{
        width: 20px;
        height: 20px;
    }
    .settingbox>form>ul>li>span.item:nth-child(2) {
        width: 70%;
    }

    .settingbox>form>ul>li>span.item:nth-child(2)>input,
    .settingbox>form>ul>li>span.item:nth-child(2)>select,
    .settingbox>form>ul>li>span.item:nth-child(2)>textarea {
        width: 99%;
        border: 1px solid #e4e4e4;
        box-shadow: inset 0 0 2px #e4e4e4;
        outline: none;
        padding: 0 10px;
    }

    .settingbox>form>ul>h4 {
        margin-top: 20px;
        font-size: 16px;
    }

    .custom-success-msg {
        width: 50%;
        color: #fff;
        height: fit-content;
        background: green;
        margin-top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 12px;
        box-shadow: 0 0 20px -9px #000, 0 0 1px 3px #008000, inset 0 0 1px 3px #fff;
    }

    .custom-success-msg>p {
        padding: 0;
        position: relative;
        top: 6px;
        height: fit-content;
    }

    /* setting page  end*/
</style>
<section class="settingbox">
   
    <?php
    if (isset($_POST['save'])) {
        if (isset($_FILES['image'])) {
          
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            if (isset($file_type) == "jpg") {
               
                    move_uploaded_file($file_tmp, "../assets/images/gallery/".   $file_name);
                    
                  

            }else{
                echo "unknown type";
            }
        }
        $webtitle = $_POST['webtitle'];
        $urlsite = $_POST['url'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $googlekey = $_POST['googleveri'];
        $keywords = $_POST['keywords'];
        $metades = $_POST['metades'];
        $debugmode = $_POST['debug'];
        $sql = "UPDATE `main_profile` SET `title`='$webtitle',`url`='$urlsite',`image`='$file_name',`firstname`='$firstname',`lastname`='$lastname',`googleverification`='$googlekey',`keywords`='$keywords',`metades`='$metades',`debug_mode`='$debugmode' WHERE 1";
        $update = mysqli_query($conn, $sql);
        if ($update) {
    ?>
            <div class="custom-success-msg">
                <p>saved</p>
            </div>

            <script>
                setTimeout(() => {
                    location.replace("setting.php");
                }, 2500);
            </script>
    <?php
        }
    }
    ?>

    <form action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <span class="item">Title</span>
                <span class="item"><input type="text" name="webtitle" value="<?php echo $add_data['title']; ?>"></span>
            </li>
            <li>
                <span class="item">Url</span>
                <span class="item"><input type="text" name="url" value="<?php echo $add_data['url']; ?>"></span>
            </li>
            
            <li>
                <span class="item">Image</span>
                <span class="item"><input type="file" name="image"></span>
            </li>
            <li class="selectedimage">
                <?php echo $add_data['image']; ?> 
            </li>
            <li>
                <span class="item">First name</span>
                <span class="item"><input type="text" name="firstname" value="<?php echo $add_data['firstname']; ?>"></span>
            </li>
            <li>
                <span class="item">Last name</span>
                <span class="item"><input type="text" name="lastname" value="<?php echo $add_data['lastname']; ?>"></span>
            </li>
            <li>
                <span class="item">Keywords</span>
                <span class="item"><input type="text" name="keywords" value="<?php echo $add_data['keywords']; ?>"></span>
            </li>
            <li>
                <span class="item">Meta description</span>
                <span class="item">
                    <textarea name="metades"><?php echo $add_data['metades']; ?></textarea></span>
            </li>
            <h4>Google search console</h4>
            <li>
                <span class="item">Verification key</span>
                <span class="item"><input type="text" name="googleveri" value="<?php echo $add_data['googleverification']; ?>"></span>
            </li>
            <h4>Shutdown</h4>
            <li>
                <span class="item">Mode</span>
                <span class="item">
                    <select name="debug">
                        <option value="<?php echo $add_data['debug_mode']; ?>" selected><?php echo $add_data['debug_mode']; ?></option>
                        <option value="Enable">Enable</option>
                        <option value="Disable">Disable</option>
                    </select>
                </span>

            </li>
        </ul>
        <button type="submit" name="save" class="btn-primary border-0" style="background:var(--primary-color); padding:5px 25px; border-radius:8px;">Save</button>

    </form>
</section>
<?php
include("include/footer.php");
?>