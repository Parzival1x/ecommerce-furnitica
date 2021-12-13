<?php  include('header.php');
if(empty($_SESSION['FRONT_USERNAME']))
{
   header('location:login.php');
}
if(!empty($_SESSION['FRONT_USERNAME']))
{

$check_user_Sql=mysqli_query($con,"select * from users where id='".$_SESSION['FRONT_USERNAME']."'");
$check_user_query=mysqli_fetch_array($check_user_Sql);
    $username_c=explode(' ',$check_user_query['name']);
    $firstname_c=$username_c[0];
    $lastname_c=$username_c[1];
    $email_c=$check_user_query['email'];
    $mobile_c=$check_user_query['mobile'];
    $userid_c=$check_user_query['id'];
}
else
{
    $firstname_c='';
    $lastname_c='';
    $email_c='';
    $mobile_c='';
    $userid_c='';
}
if(isset($_POST['checkout_finish']) && !empty($_SESSION['cart_item']))
{
    $userid=$_POST['userid'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $fullname=$firstname.' '.$lastname;
    $email=$_POST['email']; 
    $address=$_POST['address'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $order_sql=mysqli_query($con,"insert into orders (userid, fullname, email, address, country, state, zip) VALUES 
        ('$userid', '$fullname' , '$email', '$address', '$country','$state','$zip')");
    if($order_sql)
    {
        $order_id=mysqli_insert_id($con);
        foreach ($_SESSION["cart_item"] as $item){
            // $item_price = $item["quantity"]*$item["price"];
            $product_order_sql=mysqli_query($con,"insert into order_detail (`userid`, `order_id`, `product_id`, `quantity`) VALUES ('$userid', '$order_id', '".$item["code"]."', '".$item["quantity"]."')");
        }
    }
    unset($_SESSION['cart_item']);
    header('location:order_details.php?orderid='.$order_id);

}
?>
<div class="product-checkout checkout-cart">
   <div id="checkout" class="main-content">
      <div class="wrap-banner">
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
                        <span>Checkout</span>
                        </a>
                     </li>
                  </ol>
               </div>
            </div>
         </nav>
         <!-- main -->
         <div class="container" style="margin-top: 30px ;">
            <div class="row">
               <div class="col-md-4 order-md-2 mb-4">
                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                     <span class="text-muted">Your cart</span>
                     <span class="badge badge-secondary badge-pill"><?= $shop_cart_total ?></span>
                  </h4>
                  <ul class="list-group mb-3 sticky-top">
                    <?php
                    if(!empty($_SESSION['cart_item']))
                                {
                                foreach ($_SESSION["cart_item"] as $item){
                                        $item_price = $item["quantity"]*$item["price"];
                    ?>
                     <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                           <h6 class="my-0"><?= $item['name'] ?></h6>
                           <small class="text-muted">X <?= $item['quantity'] ?></small>
                        </div>
                        <span class="text-muted">$<?= $item['price'] ?></span>
                     </li>
                 <?php } ?>
                    
                     <!-- <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                           <h6 class="my-0">Promo code</h6>
                           <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">-$5</span>
                     </li> -->
                     <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$<?= $item_price ?></strong>
                     </li>
                 <?php } ?>
                  </ul>
                  <!-- <form class="card p-2">
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                           <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                     </div>
                  </form> -->
               </div>
               <div class="col-md-8 order-md-1">
                  <h4 class="mb-3">Billing address</h4>
                  <form class="needs-validation" action="" method="post">
                    <input type="hidden" value="<?= $userid_c ?>" name="userid">
                     <div class="row">
                        <div class="col-md-6 mb-3">
                           <label for="firstName">First name</label>
                           <input type="text" class="form-control" id="firstName" name="firstname" placeholder="" value="<?= $firstname_c ?>" required="required">
                           <div class="invalid-feedback"> Valid first name is required. </div>
                        </div>
                        <div class="col-md-6 mb-3">
                           <label for="lastName">Last name</label>
                           <input type="text" class="form-control" id="lastName" name="lastname" placeholder="" value="<?= $lastname_c ?>" required="required">
                           <div class="invalid-feedback"> Valid last name is required. </div>
                        </div>
                     </div>
                     
                     <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="<?= $email_c; ?>" required>
                        <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                     </div>
                     <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required="required">
                        <div class="invalid-feedback"> Please enter your shipping address. </div>
                     </div>
                     
                     <div class="row">
                        <div class="col-md-5 mb-3">
                           <label for="country">Country</label>
                           <select class="custom-select d-block w-100" id="country" name="country" required="required">
                              <option value="">Choose...</option>
                              <option>United States</option>
                           </select>
                           <div class="invalid-feedback"> Please select a valid country. </div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <label for="state">State</label>
                           <select class="custom-select d-block w-100" id="state" name="state" required="required">
                              <option value="">Choose...</option>
                              <option>California</option>
                           </select>
                           <div class="invalid-feedback"> Please provide a valid state. </div>
                        </div>
                        <div class="col-md-3 mb-3">
                           <label for="zip">Zip</label>
                           <input type="text" name="zip" class="form-control" id="zip" placeholder="" required="required">
                           <div class="invalid-feedback"> Zip code required. </div>
                        </div>
                     </div>
                     <hr class="mb-4">
                     <!-- <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                     </div>
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info">
                        <label class="custom-control-label" for="save-info">Save this information for next time</label>
                     </div> -->
                     <hr class="mb-4">
                     <h4 class="mb-3">Payment</h4>
                     <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                           <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                           <label class="custom-control-label" for="credit">Cash On Delivery</label>
                        </div>
                        
                     </div>
                     
                     
                     <hr class="mb-4">
                     <button class="btn btn-primary btn-lg btn-block" type="submit" name="checkout_finish">Continue to checkout</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php  include('footer.php'); ?>