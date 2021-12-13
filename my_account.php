<?php  
ob_start();
include('header.php');

if (!isset($_SESSION['FRONT_USERNAME'])) {
    header('location:index.php');
}
$userid=$_SESSION['FRONT_USERNAME'];

$signup_sql=mysqli_query($con,"select * from users where id='$userid'");
$signup_query=mysqli_fetch_array($signup_sql);
?>
<div id="product-detail">
<div class="main-content">
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
                                <span>My Account</span>
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </nav>

        <div class="acount head-acount">
            <div class="container">
                <div id="main">
                    <h1 class="title-page">My Account</h1>
                    
                    <div class="content" id="block-history">
                        <div class="main-product-detail">
                            <div class="review">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#detail" class="active show">My Detail</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#orderHistory">Order History</a>
                                    </li>
                                </ul>
                                
                                <div class="tab-content">
                                    <div id="detail" class="tab-pane fade in active show">
                                        <table class="std table">
                                            <tbody>
                                                <tr>
                                                    <th class="first_item">My Name :</th>
                                                    <td><?php echo $signup_query['name']?></td>
                                                </tr>
                                                <!-- <tr>
                                                    <th class="first_item">Company :</th>
                                                    <td>TivaTheme</td>
                                                </tr>
                                                <tr>
                                                    <th class="first_item">Address :</th>
                                                    <td>123 canberra Street, New York, USA</td>
                                                </tr>
                                                <tr>
                                                    <th class="first_item">City :</th>
                                                    <td>New York</td>
                                                </tr>
                                                <tr>
                                                    <th class="first_item">Postal/Zip Code :</th>
                                                    <td>10001</td>
                                                </tr> -->
                                                <tr>
                                                    <th class="first_item">Phone :</th>
                                                    <td><?php echo $signup_query['mobile']?></td>
                                                </tr>
                                                <tr>
                                                    <th class="first_item">Email Address:</th>
                                                    <td><?php echo $signup_query['email']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="orderHistory" class="tab-pane fade in">
                                        <div class="">
                                        <?php
                                        $userid=$_SESSION['FRONT_USERNAME'];
                                        $order_get_sql=mysqli_query($con,"select * from order_detail where userid='$userid' group by order_id");
                                        
                                        if(mysqli_num_rows($order_get_sql))
                                        {
                                            ?>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>#</th>
                                                    <th>ORDER ID</th>
                                                    <th>View Receipt</th>
                                                    <th>Status</th>
                                                    <th>order Date</th>
                                                </tr>
                                            <?php
                                            $ii=0;
                                            while($order_get_query=mysqli_fetch_array($order_get_sql))
                                            {
                                                $old_date_timestamp = strtotime($order_get_query['created_at']);
                                                $new_date = date('d-m-Y', $old_date_timestamp);   
                                                $ii++;
                                                ?>
                                                <tr>
                                                    <td><?= $ii ?></td>
                                                    <td>#00<?= $order_get_query['order_id'] ?></td>
                                                    <td><a href="order_details.php?orderid=<?= $order_get_query['order_id'] ?>" target="_blank" style="color: #ff5151;">View Receipt</a></td>
                                                    <td>Status</td>
                                                    <td><?= $new_date ?></td>
                                                </tr>
                                                <?php
                                            }
                                            echo '</table>';
                                        }
                                        else{

                                        ?>
                                        <h4>Order <span class="detail">History</span></h4>
                                        <p>You haven't placed any orders yet.</p>
                                        <?php 
                                        }
                                        ?>
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


<?php  include('footer.php'); ?>