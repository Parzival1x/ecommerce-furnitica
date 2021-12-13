<?php  include('header.php');
 $userid=$_SESSION['FRONT_USERNAME'];
 if(empty($_SESSION['FRONT_USERNAME']) || !isset($_GET['orderid']))
 {
    header('location:my_account.php');
 }
 $user_get_sql=mysqli_query($con,"select * from users where id='$userid'");
 $user_get_query=mysqli_fetch_array($user_get_sql);
 $order_get_sql=mysqli_query($con,"select * from order_detail where userid='$userid' and order_id='".$_GET['orderid']."'");
 if(!mysqli_num_rows($order_get_sql))
 {
     header('location:my_account.php');
 }
 $orderid=$_GET['orderid'];

?>

<div class="container-fluid my-5 d-flex justify-content-center">
    <div class="card card-1" style="box-shadow: 1px 1px 1px 2px #ddd;">
        <div class="card-header bg-white">
            <div class="media flex-sm-row flex-column-reverse justify-content-between ">
                <div class="col my-auto">
                    <h4 class="mb-0">Thanks for your Order<span class="change-color"></h4>
                </div>
                <div class="col-auto text-center my-auto pl-0 pt-sm-4"> <img class="img-fluid my-auto align-items-center mb-0 pt-3" src="img/home/logo.png" width="115" height="115">
                    <p class="mb-4 pt-0 Glasses"></p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-between mb-3">
                <div class="col-auto">
                    <h6 class="color-1 mb-0 change-color">Receipt</h6>
                </div>
                <div class="col-auto "> <small>OrderId : #00<?= $orderid ?></small> </div>
            </div>
            <?php
            $total_price=0;
            // $final_price=0;
                $order_sql=mysqli_query($con,"select product.id as productid,product.name,product.price,product.image,order_detail.quantity,order_detail.created_at from orders INNER JOIN order_detail INNER JOIN product ON product.id=order_detail.product_id and
                 orders.id=order_detail.order_id and order_detail.userid='$userid' and order_detail.order_id='$orderid'");
                
                 if(mysqli_num_rows($order_sql) >= 0)
                 {
                     while($order_query=mysqli_fetch_array($order_sql))
                     {
                        $total_price+=$order_query['price'];
                        $old_date_timestamp = strtotime($order_query['created_at']);
                        $new_date = date('d M,y', $old_date_timestamp); 
            ?>
                    <div class="row">
                        <div class="col">
                            <div class="card card-2">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="sq align-self-center "> <img class="img-fluid my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $order_query['image'] ?>" width="135" height="135" /> </div>
                                        <div class="media-body my-auto text-right">
                                            <div class="row my-auto flex-column flex-md-row">
                                                <div class="col my-auto">
                                                    <h6 class="mb-0"><?= $order_query['name'] ?></h6>
                                                </div>
                                                
                                                <div class="col my-auto"> <small>Qty : <?= $order_query['quantity'] ?></small></div>
                                                <div class="col my-auto">
                                                    <h6 class="mb-0">$<?= $order_query['price'] ?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-3 ">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php
                $final_price = $total_price*$order_query['quantity'];
                     }
                }

                
                ?>
            
            <div class="row mt-4">
                <div class="col">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <p class="mb-1 text-dark"><b>Order Details</b></p>
                        </div>
                        <div class="flex-sm-col text-right col">
                            <p class="mb-1"><b>Total</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                            <p class="mb-1">$<?= $final_price?></p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="row invoice ">
                <div class="col">
                   
                    <p class="mb-1">Invoice Date : <?= $new_date; ?></p>
                  
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="jumbotron-fluid">
                <div class="row justify-content-between ">
                    <div class="col-sm-auto col-auto my-auto"><img class="img-fluid my-auto align-self-center " src="img/home/logo.png" width="115" height="115"></div>
                    <div class="col-auto my-auto ">
                        <h2 class="mb-0 font-weight-bold">TOTAL PAID</h2>
                    </div>
                    <div class="col-auto my-auto ml-auto">
                        <h1 class="display-3 ">$<?= $final_price ?></h1>
                    </div>
                </div>
                <div class="row mb-3 mt-3 mt-md-0">
                    <div class="col-auto border-line"> <small class="text-white">PAN:AA02hDW7E</small></div>
                    <div class="col-auto border-line"> <small class="text-white">CIN:UMMC20PTC </small></div>
                    <div class="col-auto "><small class="text-white">GSTN:268FD07EXX </small> </div>
                </div>
            </div>
        </div>
    </div>
</div>  


<?php  include('footer.php'); ?>