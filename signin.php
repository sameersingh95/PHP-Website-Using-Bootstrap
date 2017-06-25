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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container-fluid" >

                

        <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="well">
                    <fieldset>
                    <legend>Login</legend>
                    <form role="form" action="login.php" method="POST">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="user" class="form-control" required=""style="width: 300px;" placeholder="Email">
                        </div>
                        <label for="Password">Password</label>
                        <div class="form-group">
                            <input type="password" name="pass" class="form-control" required=""style="width: 300px;" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <img src="gencaptcha.php"><a href="nsign.php"><img src="refresh.png" title="Refresh Captcha"height="45" width="45"></a>
                        </div>
                        <div class="form-group">
                            <input type="text" name="secure" class="form-control" required=""style="width: 300px;" placeholder="Captcha">
                        </div>
                        <button name="submit" class="btn btn-primary btn-block" style="width: 100px">Submit</button>
                    </form>
                    <div style="margin-top: 10px">
                        <a href="forgotpass.php">Forgot Password?</a>&ensp;<a href="forgotuser.php">  Forgot Username?</a>
                    </div>
                    </fieldset>
                </div>
                    <div align="center">
                    <a href="nsignup.php">New User?</a><br>
                    OR<br>
                    <?php include 'index1.php';?>
                </div>
                </div>
                
                <!-- button -->
                

            </div>
        </div>
</body>
</html>