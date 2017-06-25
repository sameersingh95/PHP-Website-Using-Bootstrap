 <?php
include 'connect.php';
function submit() {
    global $conn;
    session_start();
    if(isset($_POST['comment'])&&!empty($_POST['comment']))
    {
	$review = $_POST['comment'];
	date_default_timezone_set("Asia/Kolkata");
	//$dt = date("d/m/Y h:i:s");
	$user= $_SESSION['user'];
	$query = "INSERT INTO review (user_id,review,username,date) VALUES ('".$_SESSION['user_id']."','$review','$user',now())";
	$data = mysqli_query($conn,$query);
	if($data)
	{
		$_SESSION['success_msg']="Review Submitted Succesfully";
		echo("<meta http-equiv=\"refresh\" content=\"0;URL='bReview.php'\">");
	}else{
            $_SESSION['fail_msg']=mysqli_error($conn);
        }
    }
    else
    {
        $_SESSION['fail_msg']="Cannot submit an empty review";
        include 'breview.php';
    }
}

if(isset($_POST['submit']))
{
	submit();
}
?>