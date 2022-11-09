<?php
include 'connect.php';
$sql = "update notify set postid = '".$_POST['textpostid']."'
,post = '".$_POST['textpost']."'
,datepost = '".$_POST['textpostdate']."'";
$query = mysqli_query($con,$sql);
echo "New record created successfully";
mysqli_close($con);

?>
<meta http-equiv="refresh" content="1;URL=viewroom.php">