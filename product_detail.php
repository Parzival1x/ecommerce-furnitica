<?php include ('header.php');
   if (isset($_GET['id']))
   {
       $product_id = mysqli_real_escape_string($con, $_GET['id']);
       if ($product_id > 0)
       {
           $get_product = get_product($con, '', '', $product_id);
           $get_img_gallery = get_product_img_gallery($con, $product_id);
       }
       else
       {
   ?>
<script>
   window.location.href='index.php';
</script>
<?php
   }
   }
   else
   {
   ?>
<script>
   window.location.href='index.php';                  
</script>
<?php
   } ?>
<div id="product-detail">
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
                                 <a href="#">
                                 <span>Home</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <span>Living Room</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <span><?php echo $get_product['0']['name'] ?></span>
                                 </a>
                              </li>
                           </ol>
                        </div>
                     </div>
                  </nav>
                  <div class="container">
                     <div class="content">
                        <div class="row">
                           <div class="col-sm-8 col-lg-12 col-md-12">
                              <div class="main-product-detail">
                                 <h2><?php echo $get_product['0']['name'] ?></h2>
                                 <div class="product-single row">
                                    <div class="product-detail col-xs-12 col-md-5 col-sm-5">
                                       <div class="page-content" id="content">
                                          <div class="images-container">
                                             <div class="js-qv-mask mask tab-content border">
                                                <div id="item1" class="tab-pane fade active in show">
                                                   <img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $get_product['0']['image'] ?>" alt="img">
                                                </div>
                                                <?php if (!empty($get_img_gallery)):
                                                   foreach ($get_img_gallery as $g_img)
                                                   { ?>
                                                <div id="item_<?=$g_img['id'] ?>" class="tab-pane fade">
                                                   <img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $g_img['image_url'] ?>" alt="img">
                                                </div>
                                                <?php
                                                   }
                                                   endif; ?>
                                                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                                   <i class="fa fa-expand"></i>
                                                </div>
                                             </div>
                                             <?php if (!empty($get_img_gallery)): ?> 
                                             <ul class="product-tab nav nav-tabs d-flex">
                                                <li class="active col">
                                                   <a href="#item1" data-toggle="tab" aria-expanded="true" class="active show">
                                                   <img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $get_product['0']['image'] ?>" alt="img">
                                                   </a>
                                                </li>
                                                <?php if (!empty($get_img_gallery)):
                                                   foreach ($get_img_gallery as $g_img)
                                                   { ?>
                                                <li class="col">
                                                   <a href="#item_<?=$g_img['id'] ?>" data-toggle="tab">
                                                   <img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $g_img['image_url'] ?>" alt="img">
                                                   </a>
                                                </li>
                                                <?php
                                                   }
                                                   endif; ?>
                                             </ul>
                                             <?php
                                                endif; ?>
                                             <div class="modal fade" id="product-modal" role="dialog">
                                                <div class="modal-dialog">
                                                   <!-- Modal content-->
                                                   <div class="modal-content">
                                                      <div class="modal-header">
                                                         <div class="modal-body">
                                                            <div class="product-detail">
                                                               <div>
                                                                  <div class="images-container">
                                                                     <div class="js-qv-mask mask tab-content">
                                                                        <div id="modal-item1" class="tab-pane fade active in show">
                                                                           <img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $get_product['0']['image'] ?>" alt="img">
                                                                        </div>
                                                                     </div>
                                                                     <ul class="product-tab nav nav-tabs">
                                                                        <li class="active">
                                                                           <a href="#modal-item1" data-toggle="tab" class=" active show">
                                                                           <img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $get_product['0']['image'] ?>" alt="img">
                                                                           </a>
                                                                        </li>
                                                                     </ul>
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
                                    </div>
                                    <div class="product-info col-xs-12 col-md-7 col-sm-7">
                                       <div class="detail-description">
                                          <div class="price-del">
                                             <span class="price">$<?php echo $get_product['0']['price'] ?></span>
                                             <span class="float-right">
                                             <span class="availb">Availability: </span>
                                             <span class="check">
                                             <i class="fa fa-check-square-o" aria-hidden="true"></i>IN STOCK</span>
                                             </span>
                                          </div>
                                          <p class="description"><?php echo $get_product['0']['short_desc'] ?></p>
                                          <div class="has-border cart-area">
                                             <form class="product-quantity" action="" method="post">
                                                <div class="qty">
                                                   <div class="input-group">
                                                      <div class="quantity">
                                                         <span class="control-label">QTY : </span>
                                                         <input type="number" name="quantity" value = "1" id="quantity_wanted" class="input-group form-control">
                                                         <span class="input-group-btn-vertical">
                                                         <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" onclick = "fplus()" type="button">
                                                         +
                                                         </button>
                                                         <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" onclick="fminus()" type="button">
                                                         -
                                                         </button>
                                                         </span>
                                                      </div>
                                                      <span class="add">
                                                        <input type="hidden" value="<?= $product_id ?>" name="code">
                                                      <button class="btn btn-primary add-to-cart add-item" data-button-action="add-to-cart" type="submit" id="addToCart">
                                                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                      <span>Add to cart</span>
                                                      </button>
                                                      </span>
                                                   </div>
                                                </div>
                                             </form>
                                             <div class="clearfix"></div>
                                             <p class="product-minimal-quantity">
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="review">
                                    <ul class="nav nav-tabs">
                                       <li class="active">
                                          <a data-toggle="tab" href="#description" class="active show">Description</a>
                                       </li>
                                    </ul>
                                    <div class="tab-content">
                                       <div id="description" class="tab-pane fade in active show">
                                          <p><?php echo $get_product['0']['description'] ?>
                                          </p>
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
         </div>
      </div>
   </div>
</div>
<?php include ('footer.php'); ?>

<script>
   function fplus(){
      document.getElementById("quantity_wanted").stepUp(1);

   }
   function fminus(){
      document.getElementById("quantity_wanted").stepDown(1);
   }
</script>