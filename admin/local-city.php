<?php
$title = "All services";
include("include/header.php");
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];

    $delete_sql = "DELETE FROM `services` WHERE `services`.`id` = '$delete_id'";
    $delete_result = mysqli_query($conn, $delete_sql);
    if ($delete_result) {

?><script>
            location.replace("./all-service.php")
        </script> <?php
                }
            }

                    ?>
<section class="section">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Serial no.</th>
                        <th>Service</th>
 
                        <th>Last update</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $get_blog = "SELECT * FROM `services`";
                    $Data = mysqli_query($conn, $get_blog);
                    if (mysqli_num_rows($Data)) {
                        $sno = 1;
                        while ($fetched = mysqli_fetch_assoc($Data)) {
                    ?>
                            <tr>
                                <td><?php echo $sno++; ?></td>
                                <td><?php echo $fetched['servicename']; ?></td>
                                
                                <td><?php echo $fetched['last_update']; ?></td>
                                <td>
                                    <a href="<?php echo "update-service.php?edit=" . $fetched['id']; ?>" class="btn-primary text-light p-1  actionbtn border-0" style="margin-right: 5px; border-radius:8px;">Edit </a>
                                    <a href="<?php echo "./all-service.php?delete=" . $fetched['id']; ?>" class="btn-danger text-light p-1 actionbtn border-0" style="border-radius:8px;">Delete</a>
                                </td>
                            </tr>
                    <?php }
                    } else {
                        echo "No data founded";
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>
<?php
include("include/footer.php");
?>