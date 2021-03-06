<?php 
include("./include/header.php");

?>
    <?php 
if  (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql =  "SELECT * FROM `product` WHERE $id";
    if(!$sql){
        echo mysqli_error($conn);
    }else{

    
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query)) {


?>     <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="page-breadcrumb__menu">
                            <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                            <li class="page-breadcrumb__nav active">Product - <?php echo $row['Product_name']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

<!-- :::::: Start Main Container Wrapper :::::: -->
<main id="main-container" class="main-container">

    <!-- Start Product Details Gallery -->
    <div class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="product-gallery-box product-gallery-box--default m-b-60">
                        <div class="product-image--large product-image--large-horizontal">
                            <img class="img-fluid" id="img-zoom" src="assets/img/product/gallery/<?php echo $row['featuredimage'] ?>" data-zoom-image="assets/img/product/gallery/<?php echo $row['featuredimage'] ?>" alt="">
                        </div>
                        <!-- <div id="gallery-zoom" class="product-image--thumb product-image--thumb-horizontal pos-relative">
                            <a class="zoom-active" data-image="assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg" data-zoom-image="assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg">
                                <img class="img-fluid" src="assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product/gallery/gallery-large/product-gallery-large-2.jpg" data-zoom-image="assets/img/product/gallery/gallery-large/product-gallery-large-2.jpg">
                                <img class="img-fluid" src="assets/img/product/gallery/gallery-large/product-gallery-large-2.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product/gallery/gallery-large/product-gallery-large-3.jpg" data-zoom-image="assets/img/product/gallery/gallery-large/product-gallery-large-3.jpg">
                                <img class="img-fluid" src="assets/img/product/gallery/gallery-large/product-gallery-large-3.jpg" alt="">
                            </a>
                            <a data-image="assets/img/product/gallery/gallery-large/product-gallery-large-4.jpg" data-zoom-image="assets/img/product/gallery/gallery-large/product-gallery-large-4.jpg">
                                <img class="img-fluid" src="assets/img/product/gallery/gallery-large/product-gallery-large-4.jpg" alt="">
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="product-details-box m-b-60">
                        <h4 class="font--regular m-b-20"><?php echo $row['Product_name']; ?></h4>
                        <ul class="product__review">
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--blank"><i class="icon-star"></i></li>
                        </ul>
                        <div class="product__price m-t-5">
                            <span class="product__price product__price--large"><i class="fas fa-rupee"></i> <?php echo $row['saleprice'] ?> <del>
                                                        <?php echo $row['MRP'] ?></del></span>
                            <span class="product__tag m-l-15 btn--tiny btn--green">-1%</span>
                        </div>

                        <div class="product__desc m-t-25 m-b-30">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                        </div>
                        <div class="product-var p-tb-30">
                            <div class="product__stock m-b-20">
                                <span class="product__stock--in"><i class="fas fa-check-circle"></i> 199 IN STOCK</span>
                            </div>
                            <div class="product-quantity product-var__item">
                                <ul class="product-modal-group">
                                    <li><a href="#modalSizeGuide" data-toggle="modal" class="link--gray link--icon-left"><i class="fal fa-money-check-edit"></i>Size Guide</a></li>
                                    <li><a href="#modalShippinginfo" data-toggle="modal" class="link--gray link--icon-left"><i class="fal fa-truck-container"></i>Shipping</a></li>
                                    <li><a href="#modalProductAsk" data-toggle="modal" class="link--gray link--icon-left"><i class="fal fa-envelope"></i>Ask About This product</a></li>
                                </ul>
                            </div>
                            <div class="product-quantity product-var__item d-flex align-items-center">
                                <span class="product-var__text">Quantity: </span>
                                <form class="quantity-scale m-l-20">
                                    <div class="value-button" id="decrease" onclick="decreaseValue()">-</div>
                                    <input type="number" id="number" value="1" />
                                    <div class="value-button" id="increase" onclick="increaseValue()">+</div>
                                </form>
                            </div>
                            <div class="product-var__item">
                                <a href="#modalAddCart" data-toggle="modal" data-dismiss="modal" class="btn btn--long btn--radius-tiny btn--green btn--green-hover-black btn--uppercase btn--weight m-r-20">Add to cart</a>
                                <a href="wishlist.html" class="btn btn--round btn--round-size-small btn--green btn--green-hover-black"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="product-var__item">
                                <div class="dynmiac_checkout--button">
                                    <input type="checkbox" id="buy-now-check" value="1" class="p-r-30">
                                    <label for="buy-now-check" class="m-b-20">I agree with the terms and condition</label>
                                    <a href="cart.html" class="btn btn--block btn--long btn--radius-tiny btn--green btn--green-hover-black text-uppercase m-r-35">Buy It Now</a>
                                </div>
                            </div>
                            <div class="product-var__item">
                                <span class="product-var__text">Guaranteed safe checkout </span>
                                <ul class="payment-icon m-t-5">
                                    <li><img src="assets/img/icon/payment/paypal.svg" alt=""></li>
                                    <li><img src="assets/img/icon/payment/amex.svg" alt=""></li>
                                    <li><img src="assets/img/icon/payment/ipay.svg" alt=""></li>
                                    <li><img src="assets/img/icon/payment/visa.svg" alt=""></li>
                                    <li><img src="assets/img/icon/payment/shoify.svg" alt=""></li>
                                    <li><img src="assets/img/icon/payment/mastercard.svg" alt=""></li>
                                    <li><img src="assets/img/icon/payment/gpay.svg" alt=""></li>
                                </ul>
                            </div>
                            <div class="product-var__item d-flex align-items-center">
                                <span class="product-var__text">Share: </span>
                                <ul class="product-social m-l-20">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Product Details Gallery -->

    <!-- Start Product Details Tab -->
    <div class="product-details-tab-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-details-content">
                        <ul class="tablist tablist--style-black tablist--style-title tablist--style-gap-30 nav">
                            <li><a class="nav-link active" data-toggle="tab" href="#product-desc">Description</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#product-dis">Product Details</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#product-review">Reviews</a></li>
                        </ul>
                        <div class="product-details-tab-box">
                            <div class="tab-content">
                                <!-- Start Tab - Product Description -->
                                <div class="tab-pane show active" id="product-desc">
                                    <div class="para__content">
                                        <p class="para__text">Use the Canon VIXIA GX10 Camcorder to capture UHD 4K video at 60 fps, recording in MP4 to dual SD memory card slots. This camcorder packs several pro-style features into its compact form, including Dual-Pixel Autofocus (DPAF). The GX10's 1" 8.29MP CMOS sensor and dual DIGIC DV 6 image processors support Wide DR Gamma with high sensitivity and low noise. Slow and fast-motion recording up to 120 fps offers special looks for highlighting sports and other special events. Smooth, steady shooting is assisted by the GX10's five-axis optical image stabilization. For composing and viewing your footage, the VIXIA GX10 incorporates a flip-out 3.5" touchscreen LCD, and a 0.24" electronic viewfinder. </p>
                                        <p class="para__text">Additional GX10 features include an HDMI 2.0 port for outputting your 4K UHD footage, assignable user buttons, and remote control using the included WL-D89 controller. Wi-Fi connectivity offers live streaming, FTP file sharing, and remote control via iOS and Android apps.</p>
                                        <h6 class="para__title">Product Highlights:</h6>
                                        <ul class="para__list">
                                            <li>UHD 4K Output up to 60 fps</li>
                                            <li>8.29MP, 1" CMOS Sensor</li>
                                            <li>Dual-Pixel CMOS Autofocus Feature</li>
                                            <li>Integrated 15x Optical Zoom Lens</li>
                                            <li>2 x DIGIC DV 6 Processors</li>
                                            <li>5-Axis Optical Image Stabilization</li>
                                            <li>Wide Dynamic Range Support</li>
                                            <li>Records 4K UHD/HD to Dual SD Card Slots</li>
                                            <li>3.5" Touchscreen LCD &amp; 0.24" EVF</li>
                                            <li>Live Stream/FTP/Remote App via Wi-Fi</li>
                                        </ul>
                                    </div>
                                </div> <!-- End Tab - Product Description -->

                                <!-- Start Tab - Product Details -->
                                <div class="tab-pane" id="product-dis">
                                    <div class="product-dis__content">
                                        <a href="#" class="product-dis__img m-b-30"><img src="assets/img/logo/another-logo.jpg" alt=""></a>
                                        <div class="table-responsive-md">
                                            <table class="product-dis__list table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="product-dis__title">Weight</td>
                                                        <td class="product-dis__text">400 g</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-dis__title">Materials</td>
                                                        <td class="product-dis__text">60% cotton, 40% polyester</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-dis__title">Dimensions</td>
                                                        <td class="product-dis__text">10 x 10 x 15 cm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-dis__title">Other Info</td>
                                                        <td class="product-dis__text">American heirloom jean shorts pug seitan letterpress</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- End Tab - Product Details -->

                                <!-- Start Tab - Product Review -->
                                <div class="tab-pane " id="product-review">
                                    <!-- Start - Review Comment -->
                                    <ul class="comment">
                                        <!-- Start - Review Comment list-->
                                        <li class="comment__list">
                                            <div class="comment__wrapper">
                                                <div class="comment__img">
                                                    <img src="assets/img/user/image-1.png" alt="">
                                                </div>
                                                <div class="comment__content">
                                                    <div class="comment__content-top">
                                                        <div class="comment__content-left">
                                                            <h6 class="comment__name">Kaedyn Fraser</h6>
                                                            <ul class="product__review">
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--blank"><i class="icon-star"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="comment__content-right">
                                                            <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                                        </div>
                                                    </div>

                                                    <div class="para__content">
                                                        <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start - Review Comment Reply-->
                                            <ul class="comment__reply">
                                                <li class="comment__reply-list">
                                                    <div class="comment__wrapper">
                                                        <div class="comment__img">
                                                            <img src="assets/img/user/image-2.png" alt="">
                                                        </div>
                                                        <div class="comment__content">
                                                            <div class="comment__content-top">
                                                                <div class="comment__content-left">
                                                                    <h6 class="comment__name">Oaklee Odom</h6>
                                                                </div>
                                                                <div class="comment__content-right">
                                                                    <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                                                </div>
                                                            </div>

                                                            <div class="para__content">
                                                                <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul> <!-- End - Review Comment Reply-->
                                        </li> <!-- End - Review Comment list-->
                                        <!-- Start - Review Comment list-->
                                        <li class="comment__list">
                                            <div class="comment__wrapper">
                                                <div class="comment__img">
                                                    <img src="assets/img/user/image-3.png" alt="">
                                                </div>
                                                <div class="comment__content">
                                                    <div class="comment__content-top">
                                                        <div class="comment__content-left">
                                                            <h6 class="comment__name">Jaydin Jones</h6>
                                                            <ul class="product__review">
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--blank"><i class="icon-star"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="comment__content-right">
                                                            <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                                        </div>
                                                    </div>

                                                    <div class="para__content">
                                                        <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> <!-- End - Review Comment list-->
                                    </ul> <!-- End - Review Comment -->

                                    <!-- Start Add Review Form-->
                                    <div class="review-form m-t-40">
                                        <div class="section-content">
                                            <h6 class="font--bold text-uppercase">ADD A REVIEW</h6>
                                            <p class="section-content__desc">Your email address will not be published. Required fields are marked *</p>
                                        </div>
                                        <form class="form-box" action="#" method="post">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-box__single-group">
                                                        <label for="form-name">Your Rating*</label>
                                                        <ul class="product__review">
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <label for="form-name">Your Name*</label>
                                                        <input type="text" id="form-name" placeholder="Enter your name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <label for="form-email">Your Email*</label>
                                                        <input type="email" id="form-email" placeholder="Enter your email" required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-box__single-group">
                                                        <label for="form-review">Your review*</label>
                                                        <textarea id="form-review" rows="8" placeholder="Write a review"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn--box btn--small btn--black btn--black-hover-green btn--uppercase font--bold m-t-30" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> <!-- End Add Review Form- -->
                                </div> <!-- Start Tab - Product Review -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Product Details Tab -->
    <?php
    }}
}
?>
    <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
    <div class="product m-t-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start Section Title -->
                    <div class="section-content section-content--border m-b-35">
                        <h5 class="section-content__title">Related Product
                        </h5>
                        <a href="shop-sidebar-grid-left.html" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">More Products<i class="fal fa-angle-right"></i></a>
                    </div> <!-- End Section Title -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="default-slider default-slider--hover-bg-red product-default-slider">
                        <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">

                        <?php
                                    $sql = "SELECT * FROM `product`";
                                    $query = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($query)) {
                                        // $percent = (($row['MRP'] - $row['saleprice']) * 100) / $row['MRP'];
                                    ?>

                                           <!-- Start Single Default Product -->
                            <div class="product__box product__default--single text-center">
                                <!-- Start Product Image -->
                                <div class="product__img-box  pos-relative">
                                    <a href="product-single-default.html" class="product__img--link">
                                        <img class="product__img img-fluid" src="assets/img/product/gallery/<?php echo $row['featuredimage'] ?>" alt="">
                                    </a>
                                    <!-- Start Procuct Label -->
                                    <span class="product__label product__label--sale-out">Soldout</span>
                                    <!-- End Procuct Label -->
                                    <!-- Start Product Action Link-->
                                    <ul class="product__action--link pos-absolute">
                                        <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                        <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                        <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                        <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                    </ul> <!-- End Product Action Link -->
                                </div> <!-- End Product Image -->
                                <!-- Start Product Content -->
                                <div class="product__content m-t-20">
                                    <ul class="product__review">
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--blank"><i class="icon-star"></i></li>
                                    </ul>
                                    <a href="product-single-default.html" class="product__link"><?php echo $row['Product_name'] ?></a>
                                    <div class="product__price m-t-5">
                                        <span class="product__price"><i class="fas fa-rupee"></i> <?php echo $row['saleprice'] ?> <del>
                                                        <?php echo $row['MRP'] ?></span>
                                    </div>
                                </div> <!-- End Product Content -->
                            </div> <!-- End Single Default Product --><?php }

                                                                            ?>


                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

    <!-- ::::::  Start  Company Logo Section  ::::::  -->
    <div class="company-logo m-t-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="company-logo__area default-slider">
                        <!-- Start Single Company Logo Item -->
                        <div class="company-logo__item">
                            <a href="#" class="company-logo__link">
                                <img src="assets/img/company-logo/company-logo-1.png" alt="" class="company-logo__img">
                            </a>
                        </div> <!-- End Single Company Logo Item -->
                        <!-- Start Single Company Logo Item -->
                        <div class="company-logo__item">
                            <a href="#" class="company-logo__link">
                                <img src="assets/img/company-logo/company-logo-2.png" alt="" class="company-logo__img">
                            </a>
                        </div> <!-- End Single Company Logo Item -->
                        <!-- Start Single Company Logo Item -->
                        <div class="company-logo__item">
                            <a href="#" class="company-logo__link">
                                <img src="assets/img/company-logo/company-logo-3.png" alt="" class="company-logo__img">
                            </a>
                        </div> <!-- End Single Company Logo Item -->
                        <!-- Start Single Company Logo Item -->
                        <div class="company-logo__item">
                            <a href="#" class="company-logo__link">
                                <img src="assets/img/company-logo/company-logo-4.png" alt="" class="company-logo__img">
                            </a>
                        </div> <!-- End Single Company Logo Item -->
                        <!-- Start Single Company Logo Item -->
                        <div class="company-logo__item">
                            <a href="#" class="company-logo__link">
                                <img src="assets/img/company-logo/company-logo-5.png" alt="" class="company-logo__img">
                            </a>
                        </div> <!-- End Single Company Logo Item -->
                        <!-- Start Single Company Logo Item -->
                        <div class="company-logo__item">
                            <a href="#" class="company-logo__link">
                                <img src="assets/img/company-logo/company-logo-6.png" alt="" class="company-logo__img">
                            </a>
                        </div> <!-- End Single Company Logo Item -->
                        <!-- Start Single Company Logo Item -->
                        <div class="company-logo__item">
                            <a href="#" class="company-logo__link">
                                <img src="assets/img/company-logo/company-logo-7.png" alt="" class="company-logo__img">
                            </a>
                        </div> <!-- End Single Company Logo Item -->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Company Logo Section  ::::::  -->

</main> <!-- :::::: End MainContainer Wrapper :::::: -->



<!-- Start Modal Size guide -->
<!-- <div class="modal fade" id="modalSizeGuide" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive size-guide-table m-t-30">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th scope="col">INTERNATIONAL</th>
                                            <th scope="col">X</th>
                                            <th scope="col">S</th>
                                            <th scope="col">M</th>
                                            <th scope="col">L</th>
                                            <th scope="col">XL</th>
                                            <th scope="col">XXL</th>
                                            <th scope="col">XXXL</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">EUROPE</th>						
                                            <td>32</td>
                                            <td>34</td>
                                            <td>36</td>
                                            <td>38</td>
                                            <td>40</td>
                                            <td>42</td>
                                            <td>44</td>
                                          </tr>
                                          <tr>							
                                            <th scope="row">US</th>						
                                            <td>0</td>
                                            <td>2</td>
                                            <td>4</td>
                                            <td>6</td>
                                            <td>8</td>
                                            <td>10</td>
                                            <td>12</td>
                                          </tr>
                                          <tr>													
                                            <th scope="row">CHEST FIT (INCHES)</th>						
                                            <td>28"</td>
                                            <td>30"</td>
                                            <td>32"</td>
                                            <td>34"</td>
                                            <td>36"</td>
                                            <td>38"</td>
                                            <td>40"	</td>
                                          </tr>
                                          <tr>														
                                            <th scope="row">CHEST FIT (CM)</th>						
                                            <td>716</td>
                                            <td>76</td>
                                            <td>81</td>
                                            <td>86</td>
                                            <td>91.5</td>
                                            <td>96.5</td>
                                            <td>101.1</td>
                                          </tr>
                                          <tr>																					
                                            <th scope="row">WAIST FIR (INCHES)</th>						
                                            <td>21"</td>
                                            <td>23"</td>
                                            <td>25"</td>
                                            <td>27"</td>
                                            <td>29"</td>
                                            <td>31"</td>
                                            <td>33"</td>
                                          </tr>
                                          <tr>																												
                                            <th scope="row">WAIST FIR (CM)</th>						
                                            <td>53.5</td>
                                            <td>58.5</td>
                                            <td>63.5</td>
                                            <td>68.5</td>
                                            <td>74</td>
                                            <td>79</td>
                                            <td>84</td>
                                          </tr>
                                          <tr>																																		
                                            <th scope="row">HIPS FIR (INCHES)</th>						
                                            <td>33"</td>
                                            <td>34"</td>
                                            <td>36"</td>
                                            <td>38"</td>
                                            <td>40"</td>
                                            <td>42"</td>
                                            <td>44"</td>
                                          </tr>
                                          <tr>																																								
                                            <th scope="row">HIPS FIR (CM)</th>						
                                            <td>81.5</td>
                                            <td>86.5</td>
                                            <td>91.5</td>
                                            <td>96.5</td>
                                            <td>101</td>
                                            <td>106.5</td>
                                            <td>111.5</td>
                                          </tr>
                                          <tr>																																														
                                            <th scope="row">SKORT LENGTHS (SM)</th>						
                                            <td>36.5</td>
                                            <td>38</td>
                                            <td>39.5</td>
                                            <td>41</td>
                                            <td>42.5</td>
                                            <td>44</td>
                                            <td>45.5</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> End Modal Size Guide -->

<!-- Start Modal Shipping Info -->
<div class="modal fade" id="modalShippinginfo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-right">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="shipping-info-list m-tb-30">
                                <li><strong>Shipping</strong></li>
                                <li>In-store collection available within 1 to 7 business days</li>
                                <li>Next-day and Express delivery options also available</li>
                                <li>Purchases are delivered in an orange box tied with a Bolduc ribbon, with the exception of certain items</li>
                                <li>See the delivery FAQs for details on shipping methods, costs and delivery times</li>
                            </ul>
                            <ul class="shipping-info-list">
                                <li><strong>Returns And Exchanges</strong></li>
                                <li>Easy and complimentary, within 14 days</li>
                                <li>See conditions and procedure in our return FAQs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Modal Shipping Info -->

<!-- Start Modal Product Ask -->
<div class="modal fade" id="modalProductAsk" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-right">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Start Add Review Form-->
                            <div class="review-form m-t-30">
                                <div class="section-content">
                                    <h6 class="font--bold text-uppercase">Have a question?</h6>
                                    <p class="section-content__desc">Your email address will not be published. Required fields are marked *</p>
                                </div>
                                <form class="form-box" action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-box__single-group">
                                                <input type="text" id="modal-ask-name" placeholder="Your name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-box__single-group">
                                                <input type="email" id="modal-ask-email" placeholder="Your email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-box__single-group">
                                                <input type="text" id="modal-ask-phone" placeholder="Your phone number" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-box__single-group">
                                                <textarea id="modal-ask-message" rows="8" placeholder="Your message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn--box btn--small btn--black btn--black-hover-green btn--uppercase font--bold m-t-30" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- End Add Review Form- -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Modal Product Ask -->

<?php include("./include/footer.php"); ?>