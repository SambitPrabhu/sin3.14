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
$name=$b['name'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cozinn | HOME</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="scripts/home.css" rel="stylesheet" type="text/css" />
</head>

<body>


    <nav class="navbar navbar-light" id="topnav">
        <a class="navbar-brand" href="#">
            <img src="images/homelogo.jpg" width="180" height="60" class="d-inline-block align-top imgPadding" alt="Cozinn Logo">
        </a>
        <table>
            <tr>
                <td><span><a href="changePassword.php" class="resPass">Reset Password</a></span></td>
                <td> <span style="float: right"><a href="logout.php" class="resPass">Logout</a></span></td>
            </tr>
        </table>
    </nav>
    <br />
    <span class="tableHead">Hey <?php echo $name;?>, welcome back!</span><br /><br />

    <div class="container">
        <div class="row">
            <div class="col-4 bg">
                <button class="buttonChat"><a href="box.php"><img src="images/sports.jpg"></a></button>
                <h5 class="chatName">Sports</h5>
                <p class="introText">Connect with your friends and challenge them too, and win maybe.</p>
            </div>
            <div class="col-4 bg">
                <button class="buttonChat"><a href="box1.php"><img src="images/reading.jpg"></a></button>
                <h5 class="chatName">Reading</h5>
                <p class="introText">So you're a bookworm? This is just the right place for you!</p>
            </div>
            <div class="col-4 bg">
                <button class="buttonChat"><a href="box2.php"><img src="images/finearts.jpg"></a></button>
                <h5 class="chatName">Fine Arts</h5>
                <p class="introText">Come over and flex those finger muscles, if they are worthy.</p>
            </div>
        </div>
        <br /><br />
        <div class="row">
            <div class="col-4 bg">
                <button class="buttonChat"><a href="box3.php"><img src="images/music.jpg"></a></button>
                <h5 class="chatName">Music</h5>
                <p class="introText">Yeah yeah we know, the image tells it all about what goes in here.</p>
            </div>
            <div class="col-4 bg">
                <button class="buttonChat"><a href="box4.php"><img src="images/dancing.jpg"></a></button>
                <h5 class="chatName">Dancing</h5>
                <p class="introText">Don't be shy, it's not your prom night , you always get a yes here.</p>
            </div>
            <div class="col-4 bg">
                <button class="buttonChat"><a href="box5.php"><img src="images/coding.jpg"></a></button>
                <h5 class="chatName">Coding</h5>
                <p class="introText">!!NOT for green text hackers!! jk y'all, everyone is welcome.</p>
            </div>
        </div>
        <br /><br />
        <div class="row">
            <div class="col-4 bg">
                <button class="buttonChat"><a href="box6.php"><img src="images/doubts.jpg"></a></button>
                <h5 class="chatName">Doubts</h5>
                <p class="introText">All ghissus are welcome, while feeling the deep down jealousy.</p>
            </div>
            <div class="col-4 bg">
                <button class="buttonChat"><a href="box7.php"><img src="images/gaming.jpg"></a></button>
                <h5 class="chatName">Gaming</h5>
                <p class="introText">Try your luck against the pros here, winning is tough.</p>
            </div>
            <div class="col-4 bg">
                <button class="buttonChat"><a href="box8.php"><img src="images/finance.jpg"></a></button>
                <h5 class="chatName">Finance</h5>
                <p class="introText">"Kya hai IIT, main to papa ka business..." Come over quick.</p>
            </div>
        </div>
    </div>
    <br /><br /><br /><br /><br /><br />

</body>

</html>
