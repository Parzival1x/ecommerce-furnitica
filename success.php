<?php  
ob_start();
include('header.php');
// require('connection.inc.php');
// require('functions.inc.php');
$order_sql=mysqli_query($con,"select product.id, product.name, product.price, product.image,order_detail.quantity from orders INNER JOIN order_detail INNER JOIN product ON order_detail.order_id=orders.id and product.id=order_detail.product_id and order_detail.id='".$_GET['orderid']."'");
?>
<div class="user-login blog">
<div class="main-content">
    
    <!-- main -->
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div id="main">
                <div class="container">
                    <h1 class="text-center title-page">Thank You For Order</h1>

                    <div class="cart-container">
                           <div class="cart-overview js-cart">
                              <ul class="cart-items">
                                <?php
                                while($order_query=mysqli_fetch_array($order_sql))
                                {
                                ?>
                                 <li class="cart-item">
                                    <div class="product-line-grid row justify-content-between">
                                       <!--  product left content: image-->
                                       <div class="product-line-grid-left col-md-2">
                                          <span class="product-image media-middle">
                                          <a href="product-detail.html">
                                          <img class="img-fluid" src="uploads/Product/<?= $order_query["image"] ?>" alt="Organic Strawberry Fruits">
                                          </a>
                                          </span>
                                       </div>
                                       <div class="product-line-grid-body col-md-6">
                                          <div class="product-line-info">
                                             <a class="label" href="product_detail.php?id=<?= $order_query["id"] ?>" data-id_customization="0"><?= $order_query["name"] ?></a>
                                          </div>
                                          <div class="product-line-info product-price">
                                             <span class="value">$<?= $order_query["price"] ?></span>
                                          </div>
                                          <!-- <div class="product-line-info">
                                             <span class="label-atrr">Size:</span>
                                             <span class="value">S</span>
                                          </div>
                                          <div class="product-line-info">
                                             <span class="label-atrr">Color:</span>
                                             <span class="value">Blue</span>
                                          </div> -->
                                       </div>
                                       <div class="product-line-grid-right text-center product-line-actions col-md-4">
                                          <div class="row">
                                             <div class="col-md-5 col qty">
                                                <div class="label">Qty:</div>
                                                <div class="quantity">
                                                   <?= $order_query["quantity"] ?>
                                                   
                                                   </span>
                                                </div>
                                             </div>
                                             
                                             
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                             <?php }  ?>
                                 
                              </ul>
                           </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php  include('footer.php'); ?>