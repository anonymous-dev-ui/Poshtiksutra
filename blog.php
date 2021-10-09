<?php include("./include/header.php"); ?>
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                        <li class="page-breadcrumb__nav active">Blog Grid Sidebar Left </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <!-- Start Leftside - Sidebar Widgets -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <!-- Start Single Sidebar Widget - Custom Menu -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Category MENU</h5>
                            </div>
                            <ul class="sidebar__menu">
                                <li><a href="#">Organic Products</a></li>
                                <li><a href="#">Herbal Product Benefits</a></li>
                               
                            </ul>
                        </div>  <!-- End Single Sidebar Widget - Custom Menu -->

                        <!-- Start Single Sidebar Widget - Recent Post -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Recent Post</h5>
                            </div>
                            <ul class="sidebar__post-blog list-space--small">
                                <li class="d-flex align-items-center ">
                                    <a class="sidebar__post-img img-responsive" href="#">
                                        <img src="assets/img/product/size-small/product-home-1-img-1.jpg" alt="">
                                    </a>
                                    <div class="sidebar__post-content">
                                        <span class="d-block color-gray">Jul 23, 2020</span>
                                        <a class="link--gray" href="">Consectetur adipi...</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <a class="sidebar__post-img img-responsive" href="#">
                                        <img src="assets/img/product/size-small/product-home-1-img-2.jpg" alt="">
                                    </a>
                                    <div class="sidebar__post-content">
                                        <span class="d-block color-gray">Jul 16, 2020</span>
                                        <a class="link--gray" href="">Without Very Dark...</a>
                                    </div>
                                </li>
                            </ul>
                        </div>  <!-- End Single Sidebar Widget - Recent Post  -->

                        <!-- ::::::  Start Single Sidebar Widget - Tag   ::::::  -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Tags</h5>
                            </div>
                            <ul class="sidebar__tag list-space--small">
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">blue</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">gold</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">gray</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">green</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">maroon</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">red</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">white</a></li>
                            </ul>
                        </div> <!-- ::::::  End Single Sidebar Widget - Recent Post   ::::::  -->
                        
                    </div>
                </div>  <!-- End Left Sidebar  Widgets-->

                <!-- Start Rightside - Blog Grid Content -->
                <div class="col-lg-9">
                    <div class="blog">
                        <div class="row">
                            <!-- Start Single Blog Grid -->
                            <div class="col-md-6">
                                <div class="blog__type-grid">
                                    <div class="blog__img"><a href=""><img src="assets/img/blog/feed/blog-feed-home-1-img-1.jpg" alt=""></a></div>
                                    
                                    <div class="blog__content">
                                        <a href=""><h3 class="blog__title m-t-25">Consectetur Adipisicing</h3></a>
                                        <div class="blog__archive m-t-20">
                                            <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i> Oct 29, 2020</a>
                                            <a href="#" class="link--gray link--icon-left"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus expedita quo voluptate, esse ratione facilis quibusdam vel ad, quas ut reiciendis neque voluptates adipisci laborum, dolor saepe natus.
                                            </p>
                                        </div>
                                        <a class="btn btn--radius btn--small btn--black btn--black-hover-green" href="blog-single-sidebar-left.html">Read More</a>
                                    </div>
                                </div> 
                            </div> <!-- End Single Blog Grid -->
                            <!-- Start Single Blog Grid -->
                            <div class="col-md-6">
                                <div class="blog__type-grid">
                                    <div class="inner-slider inner-slider-grid-1 pos-relative">
                                        <div class="blog__img"><img src="assets/img/blog/feed/blog-feed-home-1-img-2.jpg" alt=""></div>
                                        <div class="blog__img"><img src="assets/img/blog/feed/blog-feed-home-1-img-1.jpg" alt=""></div>
                                        <div class="blog__img"><img src="assets/img/blog/feed/blog-feed-home-1-img-3.jpg" alt=""></div>
                                    </div>
                                    <div class="blog__content">
                                        <a href=""><h3 class="blog__title m-t-25">Without Very Darkness</h3></a>
                                        <div class="blog__archive m-t-20">
                                            <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i> Jul 9, 2020</a>
                                            <a href="#" class="link--gray link--icon-left"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus expedita quo voluptate, esse ratione facilis quibusdam vel ad, quas ut reiciendis neque voluptates adipisci laborum, dolor saepe natus.
                                            </p>
                                        </div>
                                        <a class="btn btn--radius btn--small btn--black btn--black-hover-green" href="blog-single-sidebar-left.html">Read More</a>
                                    </div>
                                </div> 
                            </div> <!-- End Single Blog Grid -->
                         
                        </div>
                    </div>

                    <div class="page-pagination">
                        <ul class="page-pagination__list">
                            <li class="page-pagination__item"><a class="page-pagination__link"  href="#">Prev</a>
                            <li class="page-pagination__item"><a class="page-pagination__link active"  href="#">1</a></li>
                            <li class="page-pagination__item"><a class="page-pagination__link"  href="#">2</a></li>
                            <li class="page-pagination__item"><a class="page-pagination__link"  href="#">Next</a>
                            </li>
                          </ul>
                    </div>
                </div>  <!-- Start Rightside - Blog Grid Content -->
                
            </div>
        </div>
    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->
    <?php include("./include/footer.php"); ?>
