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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Videos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="bhtmlvideo.php" id="b">HTML</a></li>
                            <li><a href="next12.php" id="b">CSS</a></li>
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
            <div class="container-fluid">
                <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-6">
                    <?php if(!empty($_SESSION['success_msg'])){ ?>
<div class="alert alert-success"><?php echo $_SESSION['success_msg']; ?></div>
<?php unset($_SESSION['success_msg']); } ?>
<?php if(!empty($_SESSION['fail_msg'])){ ?>
<div class="alert alert-danger"><?php echo $_SESSION['fail_msg'];?></div>
<?php unset($_SESSION['fail_msg']); } ?>
                    <div class="well">
                    <?php
include 'connect.php';
if(isset($_POST['Yes'])){
    session_start();
    global $conn;
    $result=  mysqli_query($conn, "delete from users where id='".$_SESSION["user_id"]."'");
    $name=  mysqli_query($conn, "Select * from images where user_id='".$_SESSION['user_id']."'");
    
    if($result )
    {
        while($filename=  mysqli_fetch_array($name))
        {
            $image=$filename['images'];
            $thumb=$filename['thumbnail'];
            $water=$filename['watermark'];
            if(file_exists('original/'.$image))
            {
                unlink('original/'.$image);
            }
            if(file_exists('thumbnails/'.$thumb))
            {
                unlink('thumbnails/'.$thumb);
            }
            if(file_exists('uploads/'.$water))
            {
                unlink('uploads/'.$water);
            }
        }
        if($row=  mysqli_query($conn, "delete from images where user_id='".$_SESSION['user_id']."'")){
            if($rev=  mysqli_query($conn, "delete  from review where user_id='".$_SESSION['user_id']."'")){
        $_SESSION['success_msg']="Your account has been deleted..!!";
        echo("<meta http-equiv=\"refresh\" content=\"0;URL='logout.php'\">");
        }}else{
        $_SESSION['fail_msg']="There was some error,Try after some time..!!";
        header('location:delete.php');
        }
    
}
}
if(isset($_POST['No']))
{
    $_SESSION['success_msg']="Good then..!!";
        echo("<meta http-equiv=\"refresh\" content=\"0;URL='bdetails.php'\">");
}
?>

    <div align="center"><h3 class="text-info">Are you sure you want to delete your <i>entire</i> account...???</h3>
        <h4 class="text-info">This will delete your account and all of it's content.</h4>
    </div>
    <div align="center">    
        <div >
            <form action="delete.php" method="POST" style="width: 300px;">
        <input class="btn btn-success btn-block" name="No" type="submit" value="No, I don't want to do that.">
            </form>
            <form action="delete.php" method="POST" style="width: 300px;">
        <input class="btn btn-danger btn-block" name="Yes" type="submit" value="Yes, delete my account and it's content." >
    </form>
            
        </div>
</div>
                </div>
            <div class="col-md-3"></div>

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






















