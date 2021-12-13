<?php
include('header.php');

if($_GET['key'] && $_GET['reset'])
{
  $username=$_GET['key'];
  $pass=$_GET['reset'];
  

  $select=mysqli_query($con,"select * from users where id='$userid'");
  if(mysqli_num_rows($select)==1)
  {
    ?>
    <form method="post" action="submit_new.php">
    <input type="hidden" name="email" value="<?php echo $username;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
}
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
  $username=$_POST['email'];
  $pass=$_POST['password'];
  $select=mysqli_query($con,"update users set password='$pass' where email='$username'");
}
?>
