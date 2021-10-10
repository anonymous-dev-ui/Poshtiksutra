<?php
session_start();
if (isset($_SESSION['username']) == false) {

    header("location:login.php");
}


require "./config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
Admin Panel
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <!-- Fontawesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="#"><img src="assets/images/logo/logo.png" alt="Logo" srcset="" style="
    object-fit: contain;
    width: 100%;
    height: 131px;
    object-position: left;
    position: absolute;
"></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">

                        <li class="sidebar-item active ">
                            <a href="./" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                     
                        <li class="sidebar-item  has-sub">
                            <a href="./all-product.php" class='sidebar-link'>
                                <i class="fas fa-box"></i>
                                <span>Product</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="./all-product.php">All Product</a>
                                </li>

                                <li class="submenu-item ">
                                    <a href="<?php echo "./product.php?create=product" ?>">Add Product</a>
                                </li>
                                
                            </ul>
                        </li>
                        

                       
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>User</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="setting.php">Settings</a>
                                </li>
                             
                                <li class="submenu-item ">
                                    <a href="logout.php">Log out</a>
                                </li>
                            </ul>
                        </li>
                        <a href="../" target="_blank" class="backward" style="top:0; width:100%; text-align:center;">Go to website</a>


                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3><?php if (isset($title) == false) {
                        echo "Dashboard";
                    } else {
                        echo $title;
                    }  ?></h3>
            </div>