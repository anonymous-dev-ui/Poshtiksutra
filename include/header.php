<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Poshtik Sutra | Grocery and Organic Food Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/vendor/fontawesome.css">
    <link rel="stylesheet" href="assets/css/vendor/plaza-icon.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Plugin CSS Files -->
    <link rel="stylesheet" href="assets/css/plugin/slick.css">
    <link rel="stylesheet" href="assets/css/plugin/material-scrolltop.css">
    <link rel="stylesheet" href="assets/css/plugin/price_range_style.css">
    <link rel="stylesheet" href="assets/css/plugin/in-number.css">
    <link rel="stylesheet" href="assets/css/plugin/venobox.min.css">
    <link rel="stylesheet" href="assets/css/plugin/jquery.lineProgressbar.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css"/>
    <link rel="stylesheet" href="assets/css/plugin/plugins.min.css"/>
    <link rel="stylesheet" href="assets/css/main.min.css"> -->

    <!-- Main Style CSS File -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!-- ::::::  Start Header Section  ::::::  -->


    <header>
        <div class="preheader">
            <div class="row-flex">
                <ul>
                    <li class="list-item">
                        <a href="./my-account.php">My account</a>
                    </li>
                    <li class="list-item">
                        <a href="./wishlist.php">Wishlist</a>
                    </li>
                    <li class="list-item">
                        <a href="./my-account.php">Order Tracking</a>
                    </li>
                </ul>
            </div>
            <div class="row-flex">
                <ul>
                    <li class="list-item download-btn">
                        <a href="#">Download App ! </a>
                    </li>
                    <li class="border-none list-item"><i class="fas fa-phone-alt"></i>
                        <a href="#">+91 1234567890</a>
                    </li>
                    <li class="list-item">
                        <i class="fas fa-user-shield"></i>
                        <p>100% Secure delivery without contacting the courier
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="midbar">
            <div class="logo"><img src="./assets/img/logo/LOGO.png" alt="">
            </div>
            <div class="searchbar">
                <span class="select-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="select" id="open-list">
                        <p>Pin Code - <span class="pincode">110053</span></p> <i class="fas fa-chevron-down"></i>
                    </span>
                    <ul id="list">
                        <li><a href="#">Pincode - 110054 - Delhi</a><i class="fas fa-map-marker-alt"></i></li>

                        <li><a href="#">Pincode - 110054 - Delhi</a><i class="fas fa-map-marker-alt"></i></li>
                        <li><a href="#">Pincode - 110054 - Delhi</a><i class="fas fa-map-marker-alt"></i></li>
                        <li><a href="#">Pincode - 110054 - Delhi</a><i class="fas fa-map-marker-alt"></i></li>
                        <li><a href="#">Pincode - 110054 - Delhi</a><i class="fas fa-map-marker-alt"></i></li>
                        <li><a href="#">Pincode - 110054 - Delhi</a><i class="fas fa-map-marker-alt"></i></li>
                        <li><a href="#">Pincode - 110054 - Delhi</a><i class="fas fa-map-marker-alt"></i></li>
                    </ul>
                </span> <span class="searchinput">
                    <input type="text" placeholder="Enter Keywords here...."><button><i class="fas fa-search"></i></button>
                </span>
            </div>
            <div class="icons">
                <a href="./login.php" class="icon-box">
                    <span class="icon">
                        <i class="fas fa-user"></i>
                    </span>
                    <span class="text">
                        <p>Login / Register</p><i class="fas fa-chevron-down"></i>
                    </span>
                </a>
                <a href="./cart.php" class="icon-box">
                    <span class="icon">
                        <i class="fas fa-bag-shopping"></i>
                        <p class="count">0.00 <i class="fas fa-inr"></i> </p>
                    </span>
                    <span class="text">
                        <p>My Cart</p><i class="fas fa-chevron-down"></i>
                    </span>
</a>
            </div>
            <div class="hamburger">
                <div id="menuToggle">
                    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
                    <input type="checkbox" />

                    <!--
    Some spans to act as a hamburger.
    
    They are acting like a real hamburger,
    not that McDonalds stuff.
    -->
                    <span></span>
                    <span></span>
                    <span></span>

                    <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
                    <ul id="menu">
                        <li class="info">
                            <a href="./about.php"><i class="fas fa-envelope"> </i>&nbsp; customercare@website.com</a>
                        </li>
                        <li class="info">
                            <a href="./about.php"><i class="fas fa-phone-alt"> </i>&nbsp; +91 12345-67890</a>
                        </li>
                        <li class="icons">
                            <a href="#"><i class="fas fa-user"></i> My Account</a>|<a href="#"><i class="fas fa-shopping-bag"></i>My cart</a>
                        </li>
                        <a href="./">
                            <li>Home</li>
                        </a><a href="./shop.php">
                            <li>Shop</li>
                        </a>
                        <a href="./blog.php">
                            <li>Blogs</li>
                        </a>
                        <a href="./about.php">
                            <li>About</li>
                        </a>
                        
                        <a href="./contact.php">
                            <li>Contact</li>
                        </a>


                    </ul>
                </div>
                </nav>
            </div>
        </div>
        <div class="navbar">
            <div class="categorybar">
                <span id="open-list">
                    <h3> All Category</h3><i class="fas fa-chevron-right"></i>
                </span>
                <ul id="list">
                    <li><img src="./assets/gallery/placeholder.png" alt=""><a href="#">Edible Oil</a><i class="fas fa-plus"></i></li>
                    <li><img src="./assets/gallery/placeholder.png" alt=""><a href="#">Herbal</a><i class="fas fa-plus"></i>
                        <ul>


                            <li><a href="#">Herbal Honey</a></li>
                            <li><a href="#">Herbal Pak</a></li>
                            <li><a href="#">Herbal Venager</a></li>
                        </ul>
                    </li>
                    <li><img src="./assets/gallery/placeholder.png" alt=""><a href="#">Garam Masala</a><i class="fas fa-plus"></i></li>
                    <li> <img src="./assets/gallery/placeholder.png" alt=""><a href="#">Honey</a><i class="fas fa-plus"></i></li>
                    <li><img src="./assets/gallery/placeholder.png" alt=""><a href="#">Ghee</a><i class="fas fa-plus"></i></li>
                </ul>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="./shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="./blog.php">Blogs</a>
                    </li>
                    <li>
                        <a href="./contact.php">Contact us</a>
                    </li>
                    <li>
                        <a href="./about.php">About us</a>
                    </li>

                </ul>
            </div>
        </div>
    </header>
    <!-- :::::: End Header Section ::::::  -->