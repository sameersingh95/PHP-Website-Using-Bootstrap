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
                        <a href="#" class="dropdown-toggle" id="a" data-toggle="dropdown" >Videos <span class="caret"></span></a>
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
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/-psgK1hrNNk"></iframe>
                                </div>
                            </dt>
                            <dd>Intro to CSS</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">  
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/ZzyFj4BItFc"></iframe>
                                </div>
                            </dt>
                            <dd>RGB Color and Line Spacing</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/sW6CRoJaaoI"></iframe>
                                </div>
                            </dt>
                            <dd>font-weight & font-style</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/4IYs-B0lwhw"></iframe>
                                </div>
                            </dt>
                            <dd>Changing Background Color</dd>
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
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/jWn1nWIFbV0"></iframe>
                                </div>
                            </dt>
                            <dd>Background Images</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">  
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/tOkQKpb7CVY"></iframe>
                                </div>
                            </dt>
                            <dd>Padding</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/5NSchEMGW-k"></iframe>
                                </div>
                            </dt>
                            <dd>Border</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/veKHw125UJs"></iframe>
                                </div>
                            </dt>
                            <dd>Margin</dd>
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
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/ykAyT_wKXZ0"></iframe>
                                </div>
                            </dt>
                            <dd>Width & Height</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">  
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/9NwvMak3x1k"></iframe>
                                </div>
                            </dt>
                            <dd>Styling Links</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/ZCurFMtOPKI"></iframe>
                                </div>
                            </dt>
                            <dd>Styling Tables</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/8vsaVX7Yg4Q"></iframe>
                                </div>
                            </dt>
                            <dd>Background Images</dd>
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
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/RRSjALnurmA"></iframe>
                                </div>
                            </dt>
                            <dd>Style More Than One Elements & Span!</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">  
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/e0ONAShY53w"></iframe>
                                </div>
                            </dt>
                            <dd>Div</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/YLFSWqWxvtU"></iframe>
                                </div>
                            </dt>
                            <dd>Styling Using Classes</dd>
                        </dl>
                    </div>
                    <div class="col-sm-3 ">
                        <dl>
                            <dt>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/fg6PMJDvR4I"></iframe>
                                </div>
                            </dt>
                            <dd>ID's</dd>
                        </dl>
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





















