<?php
include("configuration.php");
session_start();
if(isset($_SESSION['email']))
{
	header("location:home.php");
}
$email=$_POST['email'];
$password=$_POST['password'];
if($email==NULL || $_POST['password']==NULL)
{
}
else
{
	$sql=mysqli_query($al,"SELECT * FROM users WHERE email='".mysqli_real_escape_string($al,$email)."' AND password='".mysqli_real_escape_string($al,sha1($password))."'");	
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['email']=$_POST['email'];
		header("location:home.php");
	}
	else
	{
		$info="Incorrect Email or Password";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login - Cozinn</title>
    <link href="scripts/loginstylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="loginlogo">
        <img src="images/loginlogo.jpg" alt="Cozinn Logo" class="loginimg">
    </div>


    <div class="loginform">
        <h1>Login to Cozinn</h1>
        <form method="post" action="">
            <table class="table" cellpadding="4" cellspacing="4">
                <tr>
                    <td align="center" colspan="2" class="tableHead logmsg">Welcome Back ;-)</td>
                </tr>
                <tr>
                    <td align="center" class="info" colspan="2"><?php echo $info;?></td>
                </tr>
                <tr>
                    <td class="labels">Email ID</td>
                    <td><input type="email" name="email" class="fields" size="30" required="required" placeholder="Enter Email" /></td>
                </tr>
                <tr>
                    <td class="labels">Password</td>
                    <td><input type="password" name="password" class="fields" size="30" required="required" placeholder="Enter Password" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Login" class="commandButton" /></td>
                </tr>
            </table>
        </form>
        <br />
        <a class="loginHref" href="registration.php">Register Here</a><br />
        <a class="loginHref" href="adminLogin.php">Admin Login</a>
        <br />
        <br />
    </div>
</body></html>