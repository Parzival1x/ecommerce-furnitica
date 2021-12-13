<?php  
ob_start();
include('header.php');
if(isset($_GET['code']))
{
    if(!empty($_SESSION["cart_item"])) {
        foreach($_SESSION["cart_item"] as $k => $v) {
            
            if($_GET["code"] == $v['code'])
                unset($_SESSION["cart_item"][$k]);              
            if(empty($_SESSION["cart_item"]))
                unset($_SESSION["cart_item"]);
        }
    }

    header('location:cart.php');
    // else
    // {
    //     unset($_SESSION["cart_item"]);
    // }
}

 ?>
<div class="product-cart checkout-cart blog">
   <div class="main-content" id="cart">
      <!-- main -->
      <div id="wrapper-site">
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
                        <a href="cart.php">
                        <span>Shopping Cart</span>
                        </a>
                     </li>
                  </ol>
               </div>
            </div>
         </nav>
         <div class="container">
            <div class="row">
               <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                  <section id="main">
                     <div class="cart-grid row">
                        <div class="col-md-9 col-xs-12 check-info">
                           <h1 class="title-page">Shopping Cart</h1>
                           <div class="cart-container">
                              <div class="cart-overview js-cart">
                                 <ul class="cart-items">
                                   <?php
                                   if(!empty($_SESSION['cart_item']))
                                   {
                                   foreach ($_SESSION["cart_item"] as $item){
                                           $item_price = $item["quantity"]*$item["price"];
                                   ?>
                                    <li class="cart-item">
                                       <div class="product-line-grid row justify-content-between">
                                          <!--  product left content: image-->
                                          <div class="product-line-grid-left col-md-2">
                                             <span class="product-image media-middle">
                                             <a href="product_detail.php">
                                             <img class="img-fluid" src="Product/<?= $item["image"] ?>" alt="Organic Strawberry Fruits">
                                             </a>
                                             </span>
                                          </div>
                                          <div class="product-line-grid-body col-md-6">
                                             <div class="product-line-info">
                                                <a class="label" href="product_detail.php?id=<?= $item["code"] ?>" data-id_customization="0"><?= $item["name"] ?></a>
                                             </div>
                                             <div class="product-line-info product-price">
                                                <span class="value">$<?= $item["price"] ?></span>
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
                                                      <p><b><?= $item["quantity"] ?></b></p>
                                                      <!-- <input type="text" name="quantity" value="<?php //$item["quantity"] ?>" class="input-group form-control"> -->
                                                      <!-- <span class="input-group-btn-vertical">
                                                      <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button">
                                                      +
                                                      </button>
                                                      <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button">
                                                      -
                                                      </button>
                                                      </span> -->
                                                   </div>
                                                </div>
                                                <div class="col-md-5 col price">
                                                   <div class="label">Total:</div>
                                                   <div class="product-price total">
                                                      $<?= $item_price ?>
                                                   </div>
                                                </div>
                                                <div class="col-md-2 col text-xs-right align-self-end">
                                                   <div class="cart-line-product-actions ">
                                                      <a class="remove-from-cart" rel="nofollow" href="cart.php?code=<?= $item["code"] ?>" data-link-action="delete-from-cart" data-id-product="1">
                                                      <i class="fas fa-trash-alt"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                <?php } } ?>
                                    
                                 </ul>
                              </div>
                           </div>
                           <a href="checkout.php" class="continue btn btn-primary pull-xs-right">
                           Continue
                           </a>
                        </div>
                        <div class="cart-grid-right col-xs-12 col-lg-3">
                           <div id="block-reassurance">
                              <ul>
                                 <li>
                                    <div class="block-reassurance-item">
                                       <img src="img/product/check1.png" alt="Security policy (edit with Customer reassurance module)">
                                       <span>Security policy (edit with Customer reassurance module)</span>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="block-reassurance-item">
                                       <img src="img/product/check2.png" alt="Delivery policy (edit with Customer reassurance module)">
                                       <span>Delivery policy (edit with Customer reassurance module)</span>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="block-reassurance-item">
                                       <img src="img/product/check3.png" alt="Return policy (edit with Customer reassurance module)">
                                       <span>Return policy (edit with Customer reassurance module)</span>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php  include('footer.php'); ?>