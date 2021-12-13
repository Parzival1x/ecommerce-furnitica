<?php  
ob_start();
include('header.php');
if(isset($_SESSION['FRONT_USERNAME']))
{
    header('location:index.php');

}
$msg='';
if(isset($_POST['signupbtn'])){
    $username=get_safe_value($con,$_POST['firstname']);
    $lastname=get_safe_value($con,$_POST['lastname']);
    $fullname=$username.' '.$lastname;
    $mobile=get_safe_value($con,$_POST['mobile']);
    $email=get_safe_value($con,$_POST['email']);
    $password=get_safe_value($con,$_POST['password']);
    $cpassword=get_safe_value($con,$_POST['cpassword']);
   
    if($password != $cpassword){
       $msg="Password and confirm password not matched!";
    }
    else
    {
        $res=mysqli_query($con,"select email from users where email='$email'");
        
        $count=mysqli_num_rows($res);
        
        if($count > 0)
        {
            $msg="Email id already taken!";
            exit;
        }
        else
        {
            $insert_sql=mysqli_query($con,"insert into users (name,email,password,mobile) VALUES('$fullname', '$email',md5('".$password."'),'$mobile')");
            
             $last_id=mysqli_insert_id($con);
            $_SESSION['FRONT_LOGIN']='yes';
            $_SESSION['FRONT_USERNAME']=$last_id;
            header('location:index.php');
           
        }

    }
    // else{
    //     $msg="Please enter correct login details";  
    // }
    
}
 ?>
<div class="user-register blog">
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
                                    <span>Registration</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>
        </div>

        <!-- main -->
        <div id="wrapper-site">
            <div class="container">
                <div class="row">
                    <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                        <div id="main">
                            <div id="content" class="page-content">
                                <div class="register-form text-center">
                                    <h1 class="text-center title-page">Create Account</h1>
                                    <form action="" id="customer-form" class="js-customer-form" method="post">
                                        <div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" name="firstname" type="text" placeholder="First name" autofocus required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" name="lastname" type="text" placeholder="Last name" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" name="email" type="email" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" name="mobile" type="text" placeholder="Mobile No." required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <input class="form-control js-child-focus js-visible-password" name="password" type="password" placeholder="Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <input class="form-control js-child-focus js-visible-password" name="cpassword" type="password" placeholder="Confirm Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <div>
                                                <button class="btn btn-primary" name="signupbtn" data-link-action="sign-in" type="submit">
                                                    Create Account
                                                </button>
                                            </div>
                                        </div>
                                        <div class="field_error"><?php echo $msg; ?></div>
                                    </form>
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