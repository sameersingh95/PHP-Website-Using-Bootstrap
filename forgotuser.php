<?php
session_start();
include 'connect.php';
global $conn;
if(isset($_POST['email']))
{
    if(!empty($_POST['email']))
    {
        $result=  mysqli_query($conn,"Select * from users where email='".mysqli_real_escape_string($conn,$_POST['email'])."'");
        if(mysqli_num_rows($result)==1)
        {
            $row=  mysqli_fetch_array($result);
                $to=$row['email'];
                $subject="Forgot your Username";
                $msg="Your username is '".$row['user']."'";
                $body="Dear, '".$row['name']."'\n".$msg;
                $headers="From:HTML and CSS Tutorials <a>";
                if(mail($to,$subject,$body,$headers))
                {
                    //echo 'Mail sent to '.$row['email'].' with your username';
                    $_SESSION['success_msg']="Mail sent to ".$row['email']." with your username";
                    echo("<meta http-equiv=\"refresh\" content=\"0;URL='bforgotuser.php'\">");
                }else {
            //echo 'Email could not be sent. Try after some time';
            $_SESSION['fail_msg']="Email could not be sent. Try after some time";
            echo("<meta http-equiv=\"refresh\" content=\"0;URL='bforgotuser.php'\">");
        }
        }else{
                //echo 'You are not registered with us';
                $_SESSION['fail_msg']="You are not registered with us";
                echo("<meta http-equiv=\"refresh\" content=\"0;URL='bforgotuser.php'\">");
            }
    }else{
        //echo 'Please enter your email id';
        $_SESSION['fail_msg']="Please enter your email id";
        echo("<meta http-equiv=\"refresh\" content=\"0;URL='bforgotuser.php'\">");
    }
}
//include 'nforgotform.php';
?>
