<?php
include("configuration.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$msg=$_POST['msg'];
$email=$_SESSION['email'];
$sql=mysqli_query($al,"SELECT * FROM users WHERE email='$email'");
$b=mysqli_fetch_array($sql);
$name=$b['nick'];
$date=date('d-M-Y');
if($msg==NULL)
{
}
else
{
	mysqli_query($al,"INSERT INTO box5 VALUES('','$name','$msg','$date')");
}
$fetch=mysqli_query($al,"SELECT * FROM box5 ORDER BY id ASC");

header("refresh: 45");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Coding Chat | COZINN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="scripts/box.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <nav>
        <span class="heading">
            <img src="images/homelogo.jpg" width="180" height="60">
        </span>
        <span style="float:right">
            <a href="logout.php" class="logoutButton">Logout</a>
        </span>
    </nav>

    <div align="center">
        <form method="post" action="">
            <table class="table" cellpadding="4" cellspacing="4">
                <tr>
                    <td align="center" class="tableHead" colspan="2">Coding Chat</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="fields msgarea" style="overflow:scroll;height:400px;word-wrap:normal;width:auto;">
                            <?php while($f=mysqli_fetch_array($fetch))
                            {
	                               ?>
                            <span class="nick"><?php echo $f['sender'];?></span> : <span class="msg"><?php echo $f['msg'];?></span><br /><?php } ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="msg" class="fields textarea" rows="2" cols="120" style="width: auto" placeholder="Enter Your Message" required="required" id="myInput"></textarea>
                    </td>
                    <td><input type="submit" value="SEND" class="commandButton" id="myBtn"><br />
                        <br />

                    </td>
                </tr>

            </table>
        </form>
        <a href="home.php" class="back">BACK</a>

    </div>
    <br /><br /><br /><br /><br />




    <script type="text/javascript" src="scripts/enterSend.js"></script>
</body></html>
