<?php  include('header.php'); 
if(isset($_GET['id']) && $_GET['id']!=''){
	$cat_id=mysqli_real_escape_string($con,$_GET['id']);
	if($cat_id>0){
		$get_product=get_product($con,'',$cat_id);
	}else{
		?>
		<script>
		window.location.href='index.php';
		</script>
		<?php
	}
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
?>
<!-- main content -->
<div id="product-sidebar-left">
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
                <div id="main">
                    <div class="page-home">

                        <!-- breadcrumb -->
                        <nav class="breadcrumb-bg">
                            <div class="container no-index">
                                <div class="breadcrumb">
                                    <ol>
                                        <li>
                                            <a href="index.php">
                                                <span>Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><?php foreach($get_product as $list){
                                            echo $list['categories'];
                                            ?>
                                        <?php break;} ?></span>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>
                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-12 col-md-12 product-container">
                                        <h1><?php foreach($get_product as $list){
                                            echo $list['categories'];
                                            ?>
                                        <?php break;} ?>    
                                        </h1>
                                        <div class="js-product-list-top firt nav-top">
                                            <div class="d-flex justify-content-around row">
                                                <div class="col col-xs-12 ">
                                                    <ul class="nav nav-tabs">
                                                        <li>
                                                            <a href="#grid" data-toggle="tab" class="active show fa fa-th-large"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#list" data-toggle="tab" class="fa fa-list-ul"></a>
                                                        </li>
                                                    </ul>
                                                    <div class="hidden-sm-down total-products">
                                                        <p>There are 12 products.</p>
                                                    </div>
                                                </div>
                                                <div class="col col-xs-12">
                                                    <div class="d-flex sort-by-row justify-content-end">
                                                        <div class="products-sort-order dropdown">
                                                            <select class="select-title">
                                                                <option value="">Sort by</option>
                                                                <option value="">Name, A to Z</option>
                                                                <option value="">Name, Z to A</option>
                                                                <option value="">Price, low to high</option>
                                                                <option value="">Price, high to low</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content product-items">
                                            <div id="grid" class="related tab-pane fade in active show">
                                                <div class="row">
                                                    <?php foreach($get_product as $list){ ?>
                                                    <div class="item text-center col-md-4">
                                                        <div class="product-miniature js-product-miniature item-one first-item">
                                                            <div class="thumbnail-container border">
                                                                <a href="product_detail.php?id=<?php echo $list['id']?>">
                                                                    <img class="img-fluid image-cover" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="img">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="product-groups">
                                                                    <div class="product-title">
                                                                        <a href="product_detail.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a>
                                                                    </div>
                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span class="price">$<?php echo $list['mrp']?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-buttons d-flex justify-content-center">
                                                                <form action="" method="post" class="formAddToCart">
                                                                            <input type="hidden" name="quantity" value="1">
                                                                            <input type="hidden" value="<?= $list['id'] ?>" name="code">
                                                                            <button class="add-to-cart" type="submit" data-button-action="add-to-cart" type="submit">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                            </button>
                                                                        </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div id="list" class="related tab-pane fade">
                                                <div class="row">
                                                    <?php foreach($get_product as $list){ ?>
                                                    <div class="item col-md-12">
                                                        <div class="product-miniature item-one first-item">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="thumbnail-container border">
                                                                        <a href="product_detail.php?id=<?php echo $list['id']?>">
                                                                            <img class="img-fluid image-cover" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="img">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product_detail.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a>
                                                                                <span class="info-stock">
                                                                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                                                                    In Stock
                                                                                </span>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">$<?php echo $list['mrp']?></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="discription">
                                                                                <?php echo $list['short_desc']?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex">
                                                                        <form action="" method="post" class="formAddToCart">
                                                                            <input type="hidden" name="quantity" value="1">
                                                                            <input type="hidden" value="<?= $list['id'] ?>" name="code">
                                                                            <button class="add-to-cart" type="submit" data-button-action="add-to-cart" type="submit">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>ADD TO CART
                                                                            </button>
                                                                        </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- pagination -->
                                        <!-- <div class="pagination">
                                            <div class="js-product-list-top ">
                                                <div class="d-flex justify-content-around row">
                                                    <div class="showing col col-xs-12">
                                                        <span>SHOWING 1-3 OF 3 ITEM(S)</span>
                                                    </div>
                                                    <div class="page-list col col-xs-12">
                                                        <ul>
                                                            <li>
                                                                <a rel="prev" href="#" class="previous disabled js-search-link">
                                                                    Previous
                                                                </a>
                                                            </li>
                                                            <li class="current active">
                                                                <a rel="nofollow" href="#" class="disabled js-search-link">
                                                                    1
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a rel="nofollow" href="#" class="disabled js-search-link">
                                                                    2
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a rel="nofollow" href="#" class="disabled js-search-link">
                                                                    3
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a rel="next" href="#" class="next disabled js-search-link">
                                                                    Next
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  include('footer.php'); ?>