<?php  
ob_start();
include('header.php');
// require('connection.inc.php');
// require('functions.inc.php');
if(isset($_SESSION['FRONT_USERNAME']))
{
    header('location:index.php');

}
$msg='';
if(isset($_POST['submitLogin'])){
    $username=get_safe_value($con,$_POST['email']);
    $password=get_safe_value($con,md5($_POST['password']));
    $sql="select * from users where email='$username' and password='$password'";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count>0){
        $result=mysqli_fetch_array($res);
        $_SESSION['FRONT_LOGIN']='yes';
        $_SESSION['FRONT_USERNAME']=$result['id'];
        header('location:index.php');
        die();
    }else{
        $msg="Please enter correct login details";  
    }
    
}

 ?>
<div class="user-login blog">
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
                                <span>Login</span>
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </nav>
    </div>
    <!-- main -->
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div id="main">
                <div class="container">
                    <h1 class="text-center title-page">Log In</h1>
                    <div class="login-form">
                        <form id="customer-form" action="" method="post">
                            <div>
                                <input type="hidden" name="back" value="my-account">
                                <div class="form-group no-gutters">
                                    <input class="form-control" name="email" type="email" placeholder=" Email" autofocus required>
                                </div>
                                <div class="form-group no-gutters">
                                    <div class="input-group js-parent-focus">
                                        <input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="no-gutters text-center">
                                    <div class="forgot-password">
                                        <a href="userReset.php" rel="nofollow">
                                            Forgot your password?
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="text-center no-gutters">
                                    <input type="hidden" name="submitLogin" value="1">
                                    <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                                        Sign in
                                    </button>
                                </div>
                            </div>
                            <div class="field_error"><?php echo $msg?></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  include('footer.php'); ?>