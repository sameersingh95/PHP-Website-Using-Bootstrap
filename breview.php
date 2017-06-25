<?php
@session_start();
include 'connect.php';
global $conn;
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
                     <li class="active" style="border-bottom: 2px solid whitesmoke;"><a href="breview.php" id="a" >Blog</a></li>
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
                    <?php 
                    if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
			{
                            global $conn;
				echo'
                    <div class="well">
                    <fieldset>
                    <legend>Feedback</legend>
                    <form role="form" action="submitreview.php" method="POST">
                       
                        <div class="form-group">
                            <textarea class="form-control" name="comment"></textarea>
                        </div>
                        <button name="submit" class="btn btn-primary btn-block" style="width: 100px">Submit</button>
                    </form>
                    </fieldset>
                </div>';
                    
                    if($reviews = mysqli_query($conn,"SELECT review,username,date FROM review"))
                                {
				if($num=  mysqli_num_rows($reviews)>0){
					while($row = mysqli_fetch_assoc($reviews)){
                                           echo ' <div class="well">
                                            <label><h4>'. $row["username"].'</h4></label>
                                            <blockquote>"' . $row["review"]. '"</blockquote>' . date("d/m/Y h:i:s a", strtotime($row["date"])). '<br>
					
                                           </div>';
                                        }
				}
				else {
					echo '<br><br><br>No reviews';
				}
                        }else{
                        echo mysqli_error($conn);
                        }}
			else
			{
                            
				echo"<h3><a href='bsignin.php'>Login</a> or <a href='bsignup.php'>Sign up</a> to give review.</h3>";
                                if($reviews = mysqli_query($conn,"SELECT review,username,date FROM review"))
                                {
				if($num=  mysqli_num_rows($reviews)>0){
					while($row = mysqli_fetch_assoc($reviews)){
                                           echo ' <div class="well">
                                            <label><h4>'. $row["username"].'</h4></label>
                                            <blockquote>"' . $row["review"]. '"</blockquote>' . date("d/m/Y h:i:s a", strtotime($row["date"])). '<br>
					
                                           </div>';
                                        }
				}
				else {
					echo '<br><br><br>No reviews';
				}
                        }else{
                        echo mysqli_error($conn);
                        }
			}
                    ?>
                
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





















