<div class="well">
<?php
include 'connect.php';
global $conn;
if(isset($_FILES['file']['name']))
{
    $name=$_FILES['file']['name'];
    $size=$_FILES['file']['size'];
    $type=$_FILES['file']['type'];
    $ksize=$size/1024;
    $tmp_name=$_FILES['file']['tmp_name'];
    $exten=  explode('.', $name);
    @$exname=$exten[0];
    @$extension=strtolower($exten[1]);
    //$extension=  strtolower(substr($name,  strpos($name, '.')+1));
    $max=2097152;
    if(!empty($name))
    {
        if($size>$max)
            {
            $_SESSION['fail_msg']="Limit exceeded";
            echo("<meta http-equiv=\"refresh\" content=\"0;URL='bdetails.php'\">");
            }
 else {
        if(($extension=='jpg'||$extension=='jpeg')&&$type=='image/jpeg')
        {
            //move_uploaded_file($tmp_name, $name);
            move_uploaded_file($tmp_name, 'original/'.$exname.'_'.$_SESSION['user_id'].'.jpg');
                if(isset($_POST['cb']))
                {
                    include 'genwatermark.php';
                    addwatermark($name);
                //echo "<img src='genwatermark.php?image=".$name."'>";
                    include 'genthumbnail.php';
               // $final='uploads/'.$name;
                    thumbnail($name);
                //echo "<img src='genthumbnail.php?src='".$name."'>";
                    $query="Insert into images values('','".$_SESSION['user_id']."','".$exname.'_'.$_SESSION['user_id'].'.jpg'."','".$exname.'_th_'.$_SESSION['user_id'].'.jpg'."','".$exname.'_wm_'.$_SESSION['user_id'].'.jpg'."')";
                    if($result=  mysqli_query($conn, $query))
                        {
                                $_SESSION['success_msg']="Image uploaded successfully<br>File size : $ksize Kb";
                                //$_SESSION['success_msg']=".File size : '.$size.'bytes";
                                header("location:bdetails.php");
                            }else{
                                $_SESSION['fail_msg']="mysqli_error($conn)";
                                echo("<meta http-equiv=\"refresh\" content=\"0;URL='bdetails.php'\">");
                            }
        }  else {
            
                    
                    include 'genthumbnail.php';
                    thumbnail($name);
                    $query="Insert into images values('','".$_SESSION['user_id']."','".$exname.'_'.$_SESSION['user_id'].'.jpg'."','".$exname.'_th_'.$_SESSION['user_id'].'.jpg'."','')";
                    if($result=  mysqli_query($conn, $query))
                        {
                                $_SESSION['success_msg']="Image uploaded successfully<br>File size : $ksize Kb";
                                //$_SESSION['success_msg']=".File size : '.$size.'bytes";
                                header("location:bdetails.php");
                            }else{
                                $_SESSION['fail_msg']="mysqli_error($conn)";
                                echo("<meta http-equiv=\"refresh\" content=\"0;URL='bdetails.php'\">");
                            }
        }
                            }  else {
        $_SESSION['fail_msg']="Your file is of type: $extension <br>File must be of type: jpg/jpeg";
        echo("<meta http-equiv=\"refresh\" content=\"0;URL='bdetails.php'\">");
        //$_SESSION['fail_msg']=".File must be of type: jpg/jpeg";
    }
           }
        }
    else
    {
        $_SESSION['fail_msg']="Please choose a file";
        echo("<meta http-equiv=\"refresh\" content=\"0;URL='bdetails.php'\">");
    }
}
?>
                    <fieldset>
                    <legend>Upload Images</legend>
                    <form role="form" action="bdetails.php" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <input type="file" class="file" name="file">
                              <div class="input-group" style="width: 400px;">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                                <input type="text" class="form-control input" disabled placeholder="Upload Image">
                                <span class="input-group-btn">
                                <button class="browse btn btn-primary input" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                </span>
                        </div>
                          </div>
                        <div >
                            <font size="2">(Size should be less than 2MB)</font>
                        </div>
                        <div class="input-group">
                            <input type="checkbox" name="cb"> <label>Apply Watermark</label>
                        </div>
                        <div style="padding:5px;">
                            <button name="submit" class="btn btn-primary btn-block" style="width: 100px; padding: 5px;">Upload</button></div>
                    </form></fieldset></div>
                    <div align="center">
                        <div style="overflow: hidden;">
                            <form action="images.php" style="display: inline-block;">
                            <input class="btn btn-primary btn-block" type="submit" value="Show Images">
                            </form>
                            <form action="thumbimages.php" style="display: inline-block;">
                            <input class="btn btn-primary btn-block" type="submit" value="Shorter version">
                            </form>
                            
                            <form action="waterimages.php" style="display: inline-block;">
                            <input class="btn btn-primary btn-block" type="submit" value="Watermarked images">
                            </form>
                        </div></div>
<script>
    $(document).on('click', '.browse', function(){
  var file = $(this).parent().parent().parent().find('.file');
  file.trigger('click');
});
$(document).on('change', '.file', function(){
  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
});
</script>