<?php


$title = "Add New Product";

include("./include/header.php");
if(isset($_GET['create'])){
$typename = $_GET['create'];
if($typename == "product"){
    include("./include/product-form.php");
}else if($typename == "product_edit"){
    include("./include/product-edit.php");
}
}
?>

<?php include("./include/footer.php") ?>