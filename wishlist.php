<?php include("./include/header.php"); ?>
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                        <li class="page-breadcrumb__nav active">Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content">
                        <h5 class="section-content__title">Your Wishlist items</h5>
                    </div>
                    <!-- Start Wishlist Table -->
                    <div class="table-content table-responsive cart-table-content m-t-30">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Until Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>ADD TO CART</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img class="img-fluid" src="assets/img/product/size-small/product-home-1-img-1.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Product Name</a></td>
                                    <td class="product-price-cart"><span class="amount">$60.00</span></td>
                                    <td class="product-quantity">
                                        <div class="quantity d-inline-block">
                                            <input type="number" min="1" step="1" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$70.00</td>
                                    <td class="product-add-cart">
                                        <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold">ADD TO CART</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img class="img-fluid" src="assets/img/product/size-small/product-home-1-img-2.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Product Name</a></td>
                                    <td class="product-price-cart"><span class="amount">$50.00</span></td>
                                    <td class="product-quantity">
                                        <div class="quantity d-inline-block">
                                            <input type="number" min="1" step="1" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$80.00</td>
                                    <td class="product-add-cart">
                                        <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold">ADD TO CART</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img class="img-fluid" src="assets/img/product/size-small/product-home-1-img-3.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Product Name</a></td>
                                    <td class="product-price-cart"><span class="amount">$70.00</span></td>
                                    <td class="product-quantity">
                                        <div class="quantity d-inline-block">
                                            <input type="number" min="1" step="1" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$90.00</td>
                                    <td class="product-add-cart">
                                        <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold">ADD TO CART</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>  <!-- End Wishlist Table -->
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

    <?php include("./include/footer.php"); ?>