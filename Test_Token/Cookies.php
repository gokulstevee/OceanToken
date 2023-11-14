<!-- Index.php: -->
<style type="text/css">
th{
text-align:right;
}
h3
{
 text-align:center;
 }
 </style>
 <table cellpadding="5"cellpadding="10"align="center">
 <h3>Login form using session and cookies with remember Me</h3>
 <form method="post"action="validate.php">
<tr><th>Email</th><td><input type="text"name="email"></td></tr>
<tr><th>Password</th><td><input type="password"name="password"></td></tr>
<tr><td colspan="2"align="center"><input
type="checkbox"name="remember"value="1">Remember Me</td></tr>
<tr><td colspan="2"align="right"><input
type="submit"value="Login"name="login"></td></tr>
</form>
</table>

<!-- Validate.php: -->
<?php
$myemail = "ckganeshkumar113@gmail.com";
$mypass = "12345";
if(isset($_POST['login'])){
$email = $_POST['email'];
$pass = $_POST['password'];
if($email == $myemail and $pass == $mypass){
if(isset($_POST['remember'])){
    setcookie('email',$email,time()+60*60*7);
}
session_start();
 $_SESSION['email'] = $email;
 header("location: welcome.php");
}else{
echo"Email or password is Invalid.<br>click here to<a
 href='login.php'>try again</a>";
 }
 }
 else{
 header("location:login.php");
 }
?>

<!-- Welcome.php: -->
<?php
session_start();
echo"Welcome ".$_SESSION['email'];
echo"<a href='logout.php'>logout</a>";
?>


<!-- Logout.php: -->
<?php
session_start();
session_destroy();
echo"you successfully logout.click here to<a href='login.php'>login again</a>";
?>