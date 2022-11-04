<?php
include 'connect.php';

$sql = "INSERT INTO users (id,firstname,lastname,phone) VALUES ('".$_POST["textid"]."','".$_POST["textfirstname"]."','".$_POST["textlastname"]."','".$_POST["textphone"]."')";
$query = mysqli_query($con,$sql);
if ($query) {
  echo "New record created successfully";
}
mysqli_close($con);
?>
<meta http-equiv="refresh" content="1;URL=viewform.php">