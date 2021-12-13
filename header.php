<?php 
ob_start();
require('connection.inc.php'); 
require('functions.inc.php'); 
$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}

// case "add":
//     if(!empty($_POST["quantity"])) {
//         $productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
//         $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
        
        
//     }
//     break;

$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$idcode = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `product` WHERE `id`='$idcode'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['id'];
$price = $row['price'];
$image = $row['image'];
$quantity=$_POST['quantity'];

$itemArray = array(
    $code=>array(
    'name'=>$name,
    'code'=>$code,
    'price'=>$price,
    'quantity'=>$quantity,
    'image'=>$image)
);

if(!empty($_SESSION["cart_item"])) {
            if(in_array($row['id'],array_keys($_SESSION["cart_item"]))) {
                foreach($_SESSION["cart_item"] as $k => $v) {
                        if($row['id'] == $k) {
                            if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                $_SESSION["cart_item"][$k]["quantity"] = 0;
                            }
                            $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                        }
                }
            } else {
                $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
            }
        } else {
            $_SESSION["cart_item"] = $itemArray;
        }
       
}
if(!empty($_SESSION['cart_item']))
{
    $shop_cart_total=count($_SESSION['cart_item']); 
}
else
{
    $shop_cart_total=0;
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- home307:34-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Furniture shop</title>

    <meta name="keywords" content="Furniture, Decor, Interior">
    <meta name="description" content="Furniture shop">
    <meta name="author" content="Furniture-shop">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- libs CSS -->
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="libs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="libs/slider-range/css/jslider.css">
    <link rel="stylesheet" href="libs/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="libs/slick-slider/css/slick.css">
    <link rel="stylesheet" href="libs/slick-slider/css/slick-theme.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reponsive.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!--custom css links-->
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body id="home3">
    <header>
        <!-- header left mobie -->
        <div class="header-mobile d-md-none">
            <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

                <!-- menu left -->
                <div id="mobile_mainmenu" class="item-mobile-top">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>

                <!-- logo -->
                <div class="mobile-logo">
                    <a href="<?= SITE_PATH;?>">
                        <img class="logo-mobile img-fluid" src="img/home/logo-mobie.png" alt="Prestashop_Furnitica">
                    </a>
                </div>
            </div>

            <!-- search -->
            <div id="mobile_search" class="d-flex">
                <div id="mobile_search_content">
                    <form method="get" action="#">
                        <input type="text" name="s" value="" placeholder="Search">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="desktop_cart">
                    <div class="blockcart block-cart cart-preview tiva-toggle">
                        <div class="header-cart tiva-toggle-btn">
                            <span class="cart-products-count"><?php echo $shop_cart_total; ?></span>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div class="dropdown-content">
                            <div class="cart-content">
                                <table>
                                    <tbody>
                                        <?php
                                        if(!empty($_SESSION["cart_item"])){
                                        foreach ($_SESSION["cart_item"] as $item){
                                        $item_price = $item["quantity"]*$item["price"];
                                        ?>
                                        <tr>
                                            <td class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="uploads/Product/<?= $item["image"] ?>" alt="Product">
                                                </a>
                                            </td>
                                            <td>
                                                <div class="product-name">
                                                    <a href="product-detail.html"><?= $item["name"] ?></a>
                                                </div>
                                                <div>
                                                    <?= $item["quantity"] ?> x
                                                    <span class="product-price">$<?= $item["price"] ?></span>
                                                </div>
                                            </td>
                                            <!-- <td class="action">
                                                <a class="remove" href="#">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </td> -->
                                        </tr>
                                        <tr class="total">
                                            <td colspan="2">Total:</td>
                                            <td>$<?= $item_price ?></td>
                                        </tr>
                                        <?php } } ?>
                                        <tr>
                                            <td colspan="3" class="d-flex justify-content-center">
                                                <div class="cart-button">
                                                    <a href="cart.php" title="View Cart">View Cart</a>
                                                    <a href="checkout.php" title="Checkout">Checkout</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="flip"> Voice Controll</div>
<div id="panel" class="container text-center">
	<div class="row">
		<div class="col-sm-4" style="margin-top:15px">
			 <input type="button" onclick="startArtyom()" value="Start voice commands"/><br><br>
		</div>
		<div class="col-sm-4" id="load-voices" style="border:1px solid">
			 <span id="output" style="font-size:20px;color:black;"></span></br>
			  <span id="time" style="font-size:35px;color:green;"></span><br>
			
		</div>
		<div class="ccol-sm-4" style="margin-top:15px">
			 <input type="button" onclick="stopArtyom()" value="Stop voice command"/><br>
			<div id="voices-item"></div>
		</div>
	</div>
</div>End of voice -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <!-- search-->
                    <div id="search_widget"
                        class="col-sm-6 col-md-5 align-items-center justify-content-end d-flex d-xs-none">
                        <form method="get" action="#">
                            <input type="text" name="s" value="" placeholder="Search ..." class="ui-autocomplete-input"
                                autocomplete="off">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- search_widget -->
                    <div class="search_widget col-lg-6 col-md-6 d-flex justify-content-end hidden-xs">
                        <!-- My Account -->
                        <div id="block_myaccount_info" class="hidden-sm-down dropdown d-flex align-items-center">
                            <div class="myaccount-title">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <a href="#acount" data-toggle="collapse" class="acount">
                                    <span>My Account</span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div id="acount" class="collapse">
                                <div class="account-list-content">
                                    <div>
                                        <a class="login" href="<?= SITE_PATH.'my_account.php'; ?>" rel="nofollow"
                                            title="Log in to your customer account">
                                            <i class="fa fa-cog"></i>
                                            <span>My Account</span>
                                        </a>
                                    </div>
                                    <?php
                                    if(!isset($_SESSION['FRONT_USERNAME']))
                                    {
                                    ?>
                                    <div>
                                        <a class="login" href="<?= SITE_PATH.'login.php'; ?>" rel="nofollow"
                                            title="Log in to your customer account">
                                            <i class="fa fa-sign-in"></i>
                                            <span>Sign in</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="register" href="<?= SITE_PATH.'signup.php'; ?>" rel="nofollow"
                                            title="Register Account">
                                            <i class="fa fa-user"></i>
                                            <span>Sign up</span>
                                        </a>
                                    </div>
                                    <?php
                                    }
                                    else
                                    {
                                        ?>
                                    <div>
                                        <a class="check-out" href="<?= SITE_PATH.'logout.php'; ?>" rel="nofollow"
                                            title="Logout">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>Logout
                                        </a>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <div>
                                        <a class="check-out" href="<?= SITE_PATH.'checkout.php'; ?>" rel="nofollow"
                                            title="Checkout">
                                            <i class="fa fa-check" aria-hidden="true"></i>Checkout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- acount  -->
                        <div
                            class="desktop_cart desktop-currency-selector hidden-sm-down dropdown d-flex align-items-center">
                            <div class="blockcart block-cart cart-preview tiva-toggle">
                                <div class="header-cart tiva-toggle-btn">
                                    <span class="cart-products-count"><?= $shop_cart_total ?></span>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                                <div class="dropdown-content">
                                    <div class="cart-content">
                                        <!-- <table>
                                            <tbody>
                                                <tr>
                                                    <td class="product-image">
                                                        <a href="product-detail.html">
                                                            <img src="img/product/5.jpg" alt="Product">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="product-name">
                                                            <a href="product-detail.html">Organic Strawberry Fruits</a>
                                                        </div>
                                                        <div>
                                                            2 x
                                                            <span class="product-price">£28.98</span>
                                                        </div>
                                                    </td>
                                                    <td class="action">
                                                        <a class="remove" href="#">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="total">
                                                    <td colspan="2">Total:</td>
                                                    <td>£92.96</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="3" class="d-flex justify-content-center">
                                                        <div class="cart-button">
                                                            <a href="<?= SITE_PATH.'cart.php'; ?>" title="View Cart">View Cart</a>
                                                            <a href="<?= SITE_PATH.'checkout.php'; ?>" title="Checkout">Checkout</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> -->
                                        <table>
                                            <tbody>
                                                <?php
                                        if(!empty($_SESSION["cart_item"])){
                                        foreach ($_SESSION["cart_item"] as $item){
                                        $item_price = $item["quantity"]*$item["price"];
                                        ?>
                                                <tr>
                                                    <td class="product-image">
                                                        <a href="product-detail.html">
                                                            <img src="Product/<?= $item["image"] ?>" alt="Product">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="product-name">
                                                            <a href="product-detail.php"><?= $item["name"] ?></a>
                                                        </div>
                                                        <div>
                                                            <?= $item["quantity"] ?> x
                                                            <span class="product-price">$<?= $item["price"] ?></span>
                                                        </div>
                                                    </td>
                                                    <!-- <td class="action">
                                                <a class="remove" href="?q=1">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </td> -->
                                                </tr>
                                                <tr class="total">
                                                    <td colspan="2">Total:</td>
                                                    <td>$<?= $item_price ?></td>
                                                </tr>
                                                <?php }  ?>
                                                <tr>
                                                    <td colspan="3" class="d-flex justify-content-center">
                                                        <div class="cart-button">
                                                            <a href="cart.php" title="View Cart">View Cart</a>
                                                            <a href="checkout.php" title="Checkout">Checkout</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header desktop -->
        <div class="header-top d-xs-none ">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-sm-2 col-md-2 d-flex align-items-center">
                        <div id="logo">
                            <a href="<?= SITE_PATH;?>">
                                <img class="img-fluid" src="img/home/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>

                    <!-- menu -->
                    <div class="main-menu col-sm-4 col-md-5 align-items-center justify-content-center navbar-expand-md">
                        <div class="menu navbar collapse navbar-collapse">
                            <ul class="menu-top navbar-nav">
                                <?php foreach($cat_arr as $list){?>
                                <li class="nav-link">
                                    <a href="category.php?id=<?php echo $list['id']?>"
                                        class="parent"><?php echo $list['categories']?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>