<?php
include 'connect.php';
$sql="select count(roomid) as totalmember from rooms"; 
$result=mysqli_query($con,$sql); 
$row=mysqli_fetch_array($result); 
echo $row['totalmember'];
?>