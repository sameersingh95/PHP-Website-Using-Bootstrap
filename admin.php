<!DOCTYPE html>
<?php @session_start();
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
                    <div class="col-md-6 col-md-offset-3">
                        <?php 
if(!empty($_SESSION['success_msg'])){ ?>
<div class="alert alert-success"><?php echo $_SESSION['success_msg']; ?></div>
<?php unset($_SESSION['success_msg']); } ?>
<?php if(!empty($_SESSION['fail_msg'])){ ?>
<div class="alert alert-danger"><?php echo $_SESSION['fail_msg'];?></div>
<?php unset($_SESSION['fail_msg']); } ?>
<?php
echo'<div align="center"><label>Users</label></div>';
include_once('connect.php');
$query = mysqli_query($conn,"SELECT * FROM users");
?>
                       <form name="bulk_action_form" action="action.php" method="post" />
    <table class="table table-striped">
        <thead>
        <tr>
            <th><input type="checkbox" name="select_all" id="select_all" value=""/></th>        
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
        </tr>
        </thead>
        <?php
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>        
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
        </tr> 
        <?php } }else{ ?>
            <tr><td colspan="5">No records found.</td></tr> 
        <?php } ?>
    </table>
                       <div align="center" style="overflow: hidden;">
                           <div style="display: inline-block;width: 100px;"><input type="submit" class="btn btn-danger" style="width: 80px;" name="Delete" value="Delete" /></div>
                           <div style="display: inline-block;"><input type="submit" class="btn btn-success" style="width: 80px;" name="Go Back" value="No" /></div></div>
</form>
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
    </script>

</body>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
	
	$('.checkbox').on('click',function(){
		if($('.checkbox:checked').length == $('.checkbox').length){
			$('#select_all').prop('checked',true);
		}else{
			$('#select_all').prop('checked',false);
		}
	});
});
         $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).fadeOut(500);
});
</script>
</head>
</html> 