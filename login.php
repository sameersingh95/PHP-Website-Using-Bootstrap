<?php
include 'connect.php';
function SignIn()
{
        session_start();
        global $conn;
        $q="SELECT * FROM users WHERE user = '".mysqli_real_escape_string($conn,$_POST['user'])."' && password = '".sha1(mysqli_real_escape_string($conn,$_POST['pass']))."'";
	$query = mysqli_query($conn,$q);
	$row = mysqli_fetch_array($query);
       if(!isset($_POST['secure']))
       {
           $_SESSION['secure'] =  substr(md5(rand(microtime())), 0, 5);
       }
       else{
           
        if(!empty($_POST['user'])&&!empty($_POST['pass']))
        {
            if(!empty($_POST['secure']))
            {
                if($_SESSION['secure']==$_POST['secure'])
            {
			
	if(!empty($row['user'])&& !empty($row['password']))
	{
                        
			$_SESSION["user_id"]=$row['id'];
			$_SESSION["pass"]=sha1($_POST["pass"]);
			$_SESSION['email']=$row['email'];
			$_SESSION['user']=$_POST['user'];
			$_SESSION['name']=$row['name'];
			$_SESSION['dob']=$row['dob'];
			$_SESSION['mob']=$row['mobile'];
		header("location:index.php");
	}else{
            
		$_SESSION['fail_msg']="Username or password is Wrong ...Click on forgot password/username to continue";
                include 'bsignin.php';
         }
        
        }else{
            $_SESSION['fail_msg']="Wrong captcha. Please try again";
            include 'bsignin.php';
        }
	

        }else{
            $_SESSION['fail_msg']="Please enter the captcha";
            include 'bsignin.php';
        }
         }
 else {
           
		$_SESSION['fail_msg']="Please Fill in the details";
                include 'bsignin.php';
 }
}
}
if(isset($_POST['submit']))
{
	SignIn();
}
?>