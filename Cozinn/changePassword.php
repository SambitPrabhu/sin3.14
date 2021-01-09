<?php
include("configuration.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$email=$_SESSION['email'];
$sql=mysqli_query($al,"SELECT * FROM users WHERE email='$email'");

$b=mysqli_fetch_array($sql);
$pass=$b['password'];
$old=sha1($_POST['old']);
$p1=sha1($_POST['p1']);
$p2=sha1($_POST['p2']);
if($_POST['p1']==NULL || $_POST['p1']==NULL || $_POST['p2']==NULL)
{
}
else
{
if($old!=$pass)
{
	$info="Incorrect Old Password";
}
elseif($p1!=$p2)
	{
		$info="New Password Didn't Matched";
	}
	else
	{
		mysqli_query($al,"UPDATE users SET password='$p2' WHERE email='$email'");
		$info="Successfully Changed your Password";
	}

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="scripts/styleSheet.css" rel="stylesheet" type="text/css" />
<link href="scripts/box.css" rel="stylesheet" type="text/css" />
<title>Change Password</title>
</head>

<body>

<nav>
    <span class="heading">
		 Change Password
    </span>
    <span style="float:right">
            <a href="logout.php" class="logoutButton">Logout</a>
    </span>
</nav>

<br />
<br />
<div align="center">
<form method="post" action="">
<table cellpadding="3" cellspacing="3" class="table">

<tr><td colspan="2" class="info" align="center"><?php echo $info;?></td></tr>
<tr><td class="labels">Enter Old Password :</td><td><input type="password" name="old" size="25" class="fields msgarea" required="required" /></td></tr>
<tr><td class="labels">Enter New Password :</td><td><input type="password" name="p1" size="25" class="fields msgarea" required="required"  /></td></tr>
<tr><td class="labels">Re-Type New Password :</td><td><input type="password" name="p2" size="25"  class="fields msgarea" required="required" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Change Password" class="commandButton" /></td></tr>
</table>
</form>
<br />
<br />
<a href="home.php" class="back">BACK</a>
</div>

</body>

</html>