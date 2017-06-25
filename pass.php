<?php
include 'connect.php';
function SignIn()
{
session_start();
global $conn;
if(!empty($_POST['pass1'])&&!empty($_POST['npass'])&&!empty($_POST['rnpass']))
        {
            if($_SESSION['pass']==sha1($_POST['pass1']))
	{
		if ($_SESSION['pass']==sha1($_POST['npass'])) 
                    {
                           $_SESSION['fail_msg']="New password can\'t be same as your current password";
                           include 'pass1.php';
                     }
                else
                {
                    if($_POST['npass']==$_POST['rnpass'])
		{
		$query = "UPDATE users SET password='".sha1(mysqli_real_escape_string($conn,$_POST['npass']))."' WHERE email='".$_SESSION['email']."'";
		$data = mysqli_query($conn,$query);
                   if($data){
                        $_SESSION['success_msg']="Password has been changed..!!";
                        header("Location:pass1.php");
                            }else{
                                $_SESSION['fail_msg']="mysqli_error($conn)";
                                header("Location:pass1.php");
                            }
		}
                else{
		$_SESSION['fail_msg']="Both Passwords are not same..!!";
                include 'pass1.php';
                }
        }
            }	
	else
	{
		$_SESSION['fail_msg']="Current password incorrect..!!";
		include 'pass1.php';
	}
 
        }else{
            $_SESSION['fail_msg']="Enter the given fields";
            include 'pass1.php';
        }
}
if(isset($_POST['submit']))
{
	SignIn();
}
?>