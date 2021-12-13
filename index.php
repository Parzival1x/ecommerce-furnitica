<?php  include('header.php'); ?>
<!-- main content -->
<div id="home3">
    <div class="main-content">
        <div class="wrap-banner">
            <!-- slide show -->
            <div class="section banner">
                <div class="tiva-slideshow-wrapper">
                    <div id="tiva-slideshow" class="nivoSlider">
                        <a href="#">
                            <img class="img-responsive" src="img/home/home1-banner1.jpg" title="#caption1"
                                alt="Slideshow image">
                        </a>
                        <a href="#">
                            <img class="img-responsive" src="img/home/home1-banner2.jpg" title="#caption2"
                                alt="Slideshow image">
                        </a>
                        <a href="#">
                            <img class="img-responsive" src="img/home/home1-banner3.jpg" title="#caption3"
                                alt="Slideshow image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <section class="page-home">
                        <!-- banner -->
                        <div class="section spacing-10 group-image-special">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="effect">
                                        <a href="category.php?id=11">
                                            <img class="img-fluid width-100" src="img/home/effect10.jpg" alt="banner-2"
                                                title="banner-2">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="effect">
                                        <a href="category.php?id=7">
                                            <img class="img-fluid width-100" src="img/home/effect11.jpg" alt="banner-2"
                                                title="banner-2">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- living room -->
                        <div class="section product-living-room">
                            <div class="container">
                                <div class="row">
                                    <div class="new-arrivals product-tab col">
                                        <div class="tab-content">
                                            <div class="title-tab-content product-tab justify-content-between">
                                                <div class="title-product">
                                                    <h2>Living Room</h2>
                                                    <!-- <p>LOREM IPSUM DOLOR SIT AMET CONSECTETUR </p> -->
                                                </div>
                                                <!-- <ul class="nav nav-tabs">
                                                    <li>
                                                        <a href="#new" class="active" data-toggle="tab">New Arrivals</a>
                                                    </li>
                                                    <li>
                                                        <a href="#best" data-toggle="tab">Best Seller</a>
                                                    </li>
                                                    <li>
                                                        <a href="#sale" data-toggle="tab">Featured Product</a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                            <div class="tab-content">
                                                <div id="new" class="tab-pane fade in active show">

                                                    <div
                                                        class="category-product owl-carousel owl-theme owl-loaded owl-drag">
                                                        <?php
                                                        $first_cat_sql=mysqli_query($con,"select * from product where categories_id=7");
                                                        while($first_cat_query=mysqli_fetch_array($first_cat_sql))
                                                        {
                                                        ?>
                                                        <div class="item text-center">
                                                            <div
                                                                class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container">
                                                                    <a
                                                                        href="product_detail.php?id=<?= $first_cat_query['id'] ?>">
                                                                        <img class="img-fluid image-cover"
                                                                            src="<?php echo PRODUCT_IMAGE_SITE_PATH . $first_cat_query['image'] ?>"
                                                                            alt="img">

                                                                    </a>
                                                                    <!-- <div class="product-flags discount">-30%</div> -->
                                                                    <!-- <div class="highlighted-informations">
                                                                        <div class="variant-links">
                                                                            <a href="#" class="color beige" title="Beige"></a>
                                                                            <a href="#" class="color orange" title="Orange"></a>
                                                                            <a href="#" class="color green" title="Green"></a>
                                                                        </div>
                                                                    </div> -->
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-title">
                                                                            <a
                                                                                href="product_detail.php?id=<?= $first_cat_query['id'] ?>"><?= $first_cat_query['name'] ?></a>
                                                                        </div>
                                                                        <!-- <div class="rating">
                                                                            <div class="star-content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                        </div> -->
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span
                                                                                    class="price">$<?= $first_cat_query['price'] ?></span>
                                                                                <del
                                                                                    class="regular-price">$<?= $first_cat_query['mrp'] ?></del>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="product-buttons d-flex justify-content-center">
                                                                        <form action="" method="post"
                                                                            class="formAddToCart">
                                                                            <input type="hidden" name="quantity"
                                                                                value="1">
                                                                            <input type="hidden"
                                                                                value="<?= $first_cat_query['id'] ?>"
                                                                                name="code">
                                                                            <button class="add-to-cart" type="submit"
                                                                                data-button-action="add-to-cart">
                                                                                <i class="fa fa-shopping-cart"
                                                                                    aria-hidden="true"></i>
                                                                                    Add
                                                                            </button>
                                                                        </form>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>

                                                    </div>
                                                </div>
                        

                        <!-- Decor -->
                        <div class="section product-living-room">
                            <div class="container">
                                <div class="row">
                                    <div class="new-arrivals product-tab col">
                                        <div class="tab-content">
                                            <div class="title-tab-content product-tab justify-content-between">
                                                <div class="title-product">
                                                    <h2>Decor</h2>
                                                    <!-- <p>LOREM IPSUM DOLOR SIT AMET CONSECTETUR </p> -->
                                                </div>
                                                <!-- <ul class="nav nav-tabs">
                                                    <li>
                                                        <a href="#new1" class="active" data-toggle="tab">New Arrivals</a>
                                                    </li>
                                                    <li>
                                                        <a href="#best1" data-toggle="tab">Best Seller</a>
                                                    </li>
                                                    <li>
                                                        <a href="#sale1" data-toggle="tab">Featured Product</a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                            <div class="tab-content">
                                                <div id="new1" class="tab-pane fade in active show">
                                                    <div
                                                        class="category-product owl-carousel owl-theme owl-loaded owl-drag">
                                                        <?php
                                                        $first_cat_sql=mysqli_query($con,"select * from product where categories_id=11");
                                                        while($first_cat_query=mysqli_fetch_array($first_cat_sql))
                                                        {
                                                        ?>
                                                        <div class="item text-center">
                                                            <div
                                                                class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container">
                                                                    <a
                                                                        href="product_detail.php?id=<?= $first_cat_query['id'] ?>">
                                                                        <img class="img-fluid image-cover"
                                                                            src="<?php echo PRODUCT_IMAGE_SITE_PATH . $first_cat_query['image'] ?>"
                                                                            alt="img">

                                                                    </a>
                                                                    <!-- <div class="product-flags discount">-30%</div> -->
                                                                    <!-- <div class="highlighted-informations">
                                                                        <div class="variant-links">
                                                                            <a href="#" class="color beige" title="Beige"></a>
                                                                            <a href="#" class="color orange" title="Orange"></a>
                                                                            <a href="#" class="color green" title="Green"></a>
                                                                        </div>
                                                                    </div> -->
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-title">
                                                                            <a
                                                                                href="product_detail.php?id=<?= $first_cat_query['id'] ?>"><?= $first_cat_query['name'] ?></a>
                                                                        </div>
                                                                        <!-- <div class="rating">
                                                                            <div class="star-content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                        </div> -->
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span
                                                                                    class="price">$<?= $first_cat_query['price'] ?></span>
                                                                                <del
                                                                                    class="regular-price">$<?= $first_cat_query['mrp'] ?></del>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="product-buttons d-flex justify-content-center">
                                                                        <form action="" method="post"
                                                                            class="formAddToCart">
                                                                            <input type="hidden" name="quantity"
                                                                                value="1">
                                                                            <input type="hidden"
                                                                                value="<?= $first_cat_query['id'] ?>"
                                                                                name="code">
                                                                            <button class="add-to-cart" type="submit"
                                                                                data-button-action="add-to-cart">
                                                                                <i class="fa fa-shopping-cart"
                                                                                    aria-hidden="true"></i>
                                                                            </button>
                                                                        </form>
                                                                        <!-- <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Decor -->
                        <div class="section product-living-room">
                            <div class="container">
                                <div class="row">
                                    <div class="new-arrivals product-tab col">
                                        <div class="tab-content">
                                            <div class="title-tab-content product-tab justify-content-between">
                                                <div class="title-product">
                                                    <h2>Kids Room</h2>
                                                    <!-- <p>LOREM IPSUM DOLOR SIT AMET CONSECTETUR </p> -->
                                                </div>
                                                <!-- <ul class="nav nav-tabs">
                                                    <li>
                                                        <a href="#new1" class="active" data-toggle="tab">New Arrivals</a>
                                                    </li>
                                                    <li>
                                                        <a href="#best1" data-toggle="tab">Best Seller</a>
                                                    </li>
                                                    <li>
                                                        <a href="#sale1" data-toggle="tab">Featured Product</a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                            <div class="tab-content">
                                                <div id="new1" class="tab-pane fade in active show">
                                                    <div
                                                        class="category-product owl-carousel owl-theme owl-loaded owl-drag">
                                                        <?php
                                                        $first_cat_sql=mysqli_query($con,"select * from product where categories_id=9");
                                                        while($first_cat_query=mysqli_fetch_array($first_cat_sql))
                                                        {
                                                        ?>
                                                        <div class="item text-center">
                                                            <div
                                                                class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container">
                                                                    <a
                                                                        href="product_detail.php?id=<?= $first_cat_query['id'] ?>">
                                                                        <img class="img-fluid image-cover"
                                                                            src="<?php echo PRODUCT_IMAGE_SITE_PATH . $first_cat_query['image'] ?>"
                                                                            alt="img">

                                                                    </a>
                                                                    <!-- <div class="product-flags discount">-30%</div> -->
                                                                    <!-- <div class="highlighted-informations">
                                                                        <div class="variant-links">
                                                                            <a href="#" class="color beige" title="Beige"></a>
                                                                            <a href="#" class="color orange" title="Orange"></a>
                                                                            <a href="#" class="color green" title="Green"></a>
                                                                        </div>
                                                                    </div> -->
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-title">
                                                                            <a
                                                                                href="product_detail.php?id=<?= $first_cat_query['id'] ?>"><?= $first_cat_query['name'] ?></a>
                                                                        </div>
                                                                        <!-- <div class="rating">
                                                                            <div class="star-content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                        </div> -->
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span
                                                                                    class="price">$<?= $first_cat_query['price'] ?></span>
                                                                                <del
                                                                                    class="regular-price">$<?= $first_cat_query['mrp'] ?></del>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="product-buttons d-flex justify-content-center">
                                                                        <form action="" method="post"
                                                                            class="formAddToCart">
                                                                            <input type="hidden" name="quantity"
                                                                                value="1">
                                                                            <input type="hidden"
                                                                                value="<?= $first_cat_query['id'] ?>"
                                                                                name="code">
                                                                            <button class="add-to-cart" type="submit"
                                                                                data-button-action="add-to-cart">
                                                                                <i class="fa fa-shopping-cart"
                                                                                    aria-hidden="true"></i>
                                                                            </button>
                                                                        </form>
                                                                        <!-- <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page Loader -->
<div id="page-preloader">
    <div class="page-loading">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>

<?php  include('footer.php'); ?>