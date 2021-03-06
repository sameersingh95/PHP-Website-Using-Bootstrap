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
                <li class="dropdown active" style="border-bottom: 2px solid whitesmoke;">
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
                <div class="row vdivide">
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/cqszz_OfAFQ"></iframe>
                                </div>
                            </dt>
                            <dd>Creating our First Webpage</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">  
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/k3dJKtQmyd0"></iframe>
                                </div>
                            </dt>
                            <dd>Downloading a Text Editor</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/JEacEPCxjl4"></iframe>
                                </div>
                            </dt>
                            <dd>Body and Headers</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/3R3QXXnF7FM"></iframe>
                                </div>
                            </dt>
                            <dd>Paragraphs and Line Breaks</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container-fluid">
                <div class="row vdivide">
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/r7HHAdP44qM"></iframe>
                                </div>
                            </dt>
                            <dd>Bold. Italics. and Comments</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">  
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/01rd3zmSm_Y"></iframe>
                                </div>
                            </dt>
                            <dd>Adding Links to our Webpage</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/tUemovUZHOo"></iframe>
                                </div>
                            </dt>
                            <dd>Create a Link Within a WebPage</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/t_L6GPushfw"></iframe>
                                </div>
                            </dt>
                            <dd>Email Links and Tool Tips</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container-fluid">
                <div class="row vdivide">
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/wOdIYPMFhsY"></iframe>
                                </div>
                            </dt>
                            <dd>Adding Images to the Webpage</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">  
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/bcO7-5zYY-4"></iframe>
                                </div>
                            </dt>
                            <dd>Resizing Images</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/bhcnHsrP42U"></iframe>
                                </div>
                            </dt>
                            <dd>Tables</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/08sa1JEc9-U"></iframe>
                                </div>
                            </dt>
                            <dd>Table Headers and Movie Stars!</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container-fluid">
                <div class="row vdivide">
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/Zv4nn8ikGoc"></iframe>
                                </div>
                            </dt>
                            <dd>Colspan & Annoying People</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">  
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/rdFJmCVnDGQ"></iframe>
                                </div>
                            </dt>
                            <dd>Cellpadding and Cellspacing</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/QLXFwzHvxak"></iframe>
                                </div>
                            </dt>
                            <dd>Lists</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        
                    </div>
                </div>
            </div>
            <hr>
                
            
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





















