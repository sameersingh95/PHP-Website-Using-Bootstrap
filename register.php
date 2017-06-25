<?php
@session_start();
include 'connect.php';
function NewUser() {
    global $conn;
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = sha1(mysqli_real_escape_string($conn,$_POST['pass']));
	$mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
	$dob = mysqli_real_escape_string($conn,$_POST['dob']);
	$query = "INSERT INTO users (name,user,password,mobile,email) VALUES ('$name','$username','$password','$mobile','$email')";
	$query2="Select id from users";
        $data = mysqli_query($conn,$query);
        $data2=  mysqli_query($conn, $query2);
        $row=  mysqli_fetch_array($data2);
	if($data)
	{
		session_start();
                $_SESSION['user_id']=$row['id'];
		$_SESSION["email"]=$_POST["email"];
		$_SESSION["name"]=$_POST["name"];
		$_SESSION["user"]=$_POST["username"];
		$_SESSION["mob"]=$_POST["mobile"];
		//$_SESSION["dob"]=$_POST["dob"];
		$_SESSION["pass"]=sha1($_POST["pass"]);
		header("location:index.php");
	}
	else {
		$_SESSION['fail_msg']="error";
                include 'bsignup.php';
	}
}
function SignUp()
{
    global $conn;
	if(!empty($_POST['username'])&&!empty($_POST['email']))
	{
		$query = mysqli_query($conn,"SELECT * FROM users WHERE user = '".mysqli_real_escape_string($conn,$_POST['username'])."'");
		$query2 = mysqli_query($conn,"SELECT * FROM users WHERE email = '".mysqli_real_escape_string($conn,$_POST['email'])."'");
		$row = mysqli_fetch_array($query);
		$row2 = mysqli_fetch_array($query2);
		if($_POST['pass']==$_POST['npass'])
                {
                    if(empty($row) && empty($row2))
		{
			NewUser();
		}
		else
		{
			if(!empty($row))
			{
				$_SESSION['fail_msg']="Sorry, username already taken!!";
                                include 'bsignup.php';
			}
			else if (!empty($row2))
			{
				$_SESSION['fail_msg']="Account for this email id already exists";
                                include 'bsignup.php';
			}
		}
                }
                else{
                    $_SESSION['fail_msg']="Passwords do not match!!";
                                include 'bsignup.php';
                }
                
	}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>