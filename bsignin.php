<?php
@session_start();
include 'connect.php';
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
{
    header("location:index.php");
}
//$_SESSION['secure']=  substr(md5(rand(0,999)), 15, 5);
$_SESSION['secure']=  substr(md5(microtime()), 0, 5);
?>
<html lang="en">
<head>
    <title>Bootstrap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="sidebar.css">
</head>
<body>
<div id="wrapper">
     <nav class="navbar navbar-inverse navbar-static-top"  style="margin-bottom: 0px;">
         <div class="container-fluid" >

            <!-- Logo -->
            <div class="navbar-header">
               <!--<a href="#" class="navbar-brand btn" id="menu-toggle">&equiv; Menu<!--<img src="css-hamburger-menu-icon.png" style="height: 50px; padding-top: 0px;">-->
                     <!-- </a>
                
                     <a href="index.php" class="navbar-brand" style="padding-top: 5px; font-family: verdana;"><h4>HTML & CSS TUTORIALS</h4></a>-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                     <div class="logo"><a href="index.php" class="navbar-brand" ><img src="hcs5.png" height="80px;"></a></div>
            </div>   
            <div class="collapse navbar-collapse" id="mainNavBar">
                 <ul class="nav navbar-nav">
                     <!--<li class="active" ><a href="index.php">Home</a></li>-->
                     <li><a href="breview.php" id="a">Blog</a></li>
                <li class="dropdown">
                        <a href="#" id="a" class="dropdown-toggle" data-toggle="dropdown">Videos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="bhtmlvideo.php" id="b">HTML</a></li>
                            <li><a href="bcssvideo.php" id="b">CSS</a></li>
                            <li><a href="bootstrapvideo.php" id="b">Bootstrap</a></li>
                        </ul>
                    </li>
                    <li><a href="bsendmail.php" id="a" >Contact us</a></li>
            </ul>
                <!--right align -->
                <ul class="nav navbar-nav navbar-right">
                      <?php
                    if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
                    {
                        echo'<li><a href="bdetails.php" id="a">'.$_SESSION['name'].'</a></li>
                    <li><a href="logout.php" id="a">Logout</a></li>';
                    }
                    else{
                    echo'<li class="active" style="border-bottom: 2px solid whitesmoke;"><a href="bsignin.php" id="a">Login</a></li>
                    <li><a href="bsignup.php" id="a">Signup</a></li>';
                    }?>
                </ul>
            </div>
            </div>

    </nav>
    

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><a href="bdetails.php" >Account</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="bsendmail.php">Contact us</a></li>
            </ul>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
            <?php if(!empty($_SESSION['success_msg'])){ ?>
<div class="alert alert-success"><?php echo $_SESSION['success_msg']; ?></div>
<?php unset($_SESSION['success_msg']); } ?>
<?php if(!empty($_SESSION['fail_msg'])){ ?>
<div class="alert alert-danger"><?php echo $_SESSION['fail_msg'];?></div>
<?php unset($_SESSION['fail_msg']); } ?>
            <div class="container-fluid" style="padding-top: 30px;">
                
                <div class="row">
                    <div class="col-md-4" style="border-right: 1px dashed #000">
                    <div class="well">
                    <fieldset>
                    <legend>Login</legend>
                    <form role="form" action="login.php" method="POST">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="user" class="form-control" required="" placeholder="Your Username">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="pass" class="form-control" required="" placeholder="Password">
                        </div>
                        <div class="input-group">
                            <img src="gencaptcha.php"><a href="bsignin.php"><img src="refresh.png" title="Refresh Captcha"height="45" width="45"></a>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Captcha</span>
                            <input type="text" name="secure" class="form-control" required="" placeholder="Write the text in the image above">
                        </div>
                        <div style="padding:5px;">
                            <button name="submit" class="btn btn-primary btn-block" style="width: 100px; padding: 5px;">Submit</button></div>
                    </form>
                    <div style="margin-top: 10px">
                        <a href="bforgotpass.php">Forgot Password?</a>&ensp;<a href="bforgotuser.php">  Forgot Username?</a>
                    </div>
                    </fieldset>
                </div>
                    <div align="center">
                    <a href="bsignup.php">New User?</a><br>
                </div>
                </div>
            <div class="col-md-4" style="border-right: 1px dashed #000;">
                <div align="center" style="padding-top: 200px; padding-bottom: 160px;">
                    <img src="or.jpg"><br></div>
            </div>
                    
                    
                        <div class="col-md-4" style="padding: 10px; ">
                            <div align="center" style="padding-top: 150px;"> <label for="sign">Google Login</label><hr>
                            <?php include 'index1.php';?>
                            </div></div>

            </div>
    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Menu toggle script -->
    <script>
        $("#menu-toggle").click( function (e){
            e.preventDefault();
            $("#wrapper").toggleClass("menuDisplayed");
        });
         $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).fadeOut(500);
});
    </script>

</body>
</html>





















