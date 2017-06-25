<?php
include 'connect.php';
global $conn;
@session_start();
if(!empty($_POST['token'])&&!empty($_POST['email'])&&!empty($_POST['pass'])&&!empty($_POST['pass1']))
{
    $query='Select * from users where email="'.$_POST['email'].'"';
    $result=  mysqli_query($conn, $query);
    $row=  mysqli_fetch_array($result);
    if($_POST['email']==$row['email'])
    {
        if($row['password']==sha1($_POST['token']))
        {
            if($_POST['pass']==$_POST['pass1'])
            {
                $query = "UPDATE users SET password='".sha1(mysqli_real_escape_string($conn,$_POST['pass']))."' WHERE email='".$_POST['email']."'";
		$data = mysqli_query($conn,$query);
                   if($data){
                        $_SESSION['success_msg']="PASSWORD HAS BEEN CHANGED";
                echo("<meta http-equiv=\"refresh\" content=\"0;URL='bnewpass.php'\">");
                $_SESSION['changed']=1;
            }else{
                $_SESSION['fail_msg']="Password could not be changed. Try after some time!!";
                        echo("<meta http-equiv=\"refresh\" content=\"0;URL='bnewpass.php'\">");
            }}
            else{
                $_SESSION['fail_msg']="Passwords don't match";
                include 'bnewpass.php';
            }
        }else{
            $_SESSION['fail_msg']="Wrong token entered";
                include 'bnewpass.php';
        }
    }else{
        $_SESSION['fail_msg']="You are not registered with us";
                include 'bnewpass.php';
    }
}else{
    $_SESSION['fail_msg']="Please fill in the details";
                include 'bnewpass.php';
}

?>