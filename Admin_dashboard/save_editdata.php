<?php
    include 'connect.php';
$sql = "update users set firstname = '".trim($_POST['textfirstname'])."',
lastname = '".trim($_POST['textlastname'])."',
phone = '".trim($_POST['textphone'])."'
where id = '".$_POST["textid"]."'";
$query = mysqli_query($con,$sql);
echo "New record created successfully";
mysqli_close($con);
?>
<meta http-equiv="refresh" content="1;URL=viewform.php">