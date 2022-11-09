<?php
include 'connect.php';
$sql = "update notify set postid = '".$_POST["textpostid"]."',
post = '".$_POST["textpostdate"]."',
startdate = '".$_POST["textstartdate"]."
";
$query = mysqli_query($con,$sql);
echo "New record created successfully";
mysqli_close($con);

?>
<meta http-equiv="refresh" content="1;URL=viewroom.php">