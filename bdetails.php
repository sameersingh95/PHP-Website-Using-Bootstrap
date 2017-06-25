<?php
@session_start();
include 'connect.php';
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
                        echo'<li class="active" style="border-bottom: 2px solid whitesmoke;"><a href="bdetails.php" id="a">'.$_SESSION['name'].'</a></li>
                    <li><a href="logout.php" id="a">Logout</a></li>';
                    }
                    else{
                    echo'<li><a href="bsignin.php" id="a">Login</a></li>
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
            <?php 
            if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
			{
            if(!empty($_SESSION['success_msg'])){ ?>
<div class="alert alert-success"><?php echo $_SESSION['success_msg']; ?></div>
<?php unset($_SESSION['success_msg']); } ?>
<?php if(!empty($_SESSION['fail_msg'])){ ?>
<div class="alert alert-danger"><?php echo $_SESSION['fail_msg'];?></div>
<?php unset($_SESSION['fail_msg']); } ?>
            <div class="container-fluid" style="padding-top: 30px;">
                
                <div class="row">
                    <div class="col-md-6" style="width: 600px; border-right: 1px dashed #000">
                        <?php include 'imageupload.php';?>
                </div>
                    <div class="col-md-6" style="width: 500px;">
                            <div class="well" >
	<?php
	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
	{
            if(strlen($_SESSION['user_id'])==21)
            {
                echo"<div class='p'><label>Name:</label> ". $_SESSION['name'] ."</div>";
	//echo"<tr><td>USERNAME:</td><td>". $_SESSION['user'] ."</td></tr>";
	echo"<div class='p'><label>Email:</label> <img src='generateimage.php'></div>";
        //echo"<tr><td>URL:</td><td>". $_SESSION['url'] ."</td><tr>";
        //echo"<tr><td>URL:</td><td>". $_SESSION['purl'] ."</td><tr>";
	//echo"<tr><td>DOB:</td><td>". $_SESSION['dob'] ."</td><tr>";
	//echo"<tr><td>MOBILE:</td><td>". $_SESSION['mob'] ."</td>";
	//echo"</tr></table>";
            }else{
                echo"<div class='p'><label>Name:</label> ". $_SESSION['name'] ."</div>";
	echo"<div class='p'><label>Username:</label> ". $_SESSION['user'] ."</div>";
	echo"<div class='p'><label>Email:</label> <img src='generateimage.php'></div>";
	//echo"<tr><td>DOB:</td><td>". $_SESSION['dob'] ."</td><tr>";
	echo"<div class='p'><label>Mobile:</label> ". $_SESSION['mob'] ."</div>";
	//echo"</tr></table>";
            }
		
	
        ?></div>
        <?php
            //echo '<div style="padding:5px;"><a href="bedit.php" class="btn btn-primary btn-block" style="width: 100px; padding: 5px;" role="button">Edit Details</a></div>';
            echo'<div style="overflow: hidden;">
    <form action="bedit.php" style="display: inline-block;">
        <input class="btn btn-primary btn-block" type="submit" value="Edit Details">
    </form>';
        if($_SESSION['email']=="sshanu95@gmail.com"){
            //echo "<div ><a href='nadmin.php' class='btn btn-primary btn-block' style='width: 160px; padding: 5px;' role='button'>Delete Users Accounts</a></div>";
            echo '  <form action="admin.php" style="display: inline-block;">
        <input class="btn btn-primary btn-block" type="submit" value="Delete Users Accounts">
    </form>';
        }else
        {
            echo '  <form action="delete.php" style="display: inline-block;">
        <input class="btn btn-primary btn-block" type="submit" value="Delete Your Account">
    </form>';
        }
	}
                        }
                        else{
                            echo'<div class="container-fluid">
                
                <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <h3><a href="bsignin.php">Login</a> or <a href="bsignup.php">Sign up</a> to see the details.</h3>
                </div>
                <div class="col-md-3"></div>
                    </div>
                    </div>';
                        }
?></div>

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





















