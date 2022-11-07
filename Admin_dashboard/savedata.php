<?php
include 'connect.php';
function alert($msg) {
  echo "<script type='text/javascript'>alert('$msg');</script>";
};
$sql = "INSERT INTO users (firstname,lastname,username,phone,password) VALUES ('".$_POST["textfirstname"]."'
,'".$_POST["textlastname"]."'
,'".$_POST["textusername"]."'
,'".$_POST["textphone"]."'
,md5('".$_POST["textpass"]."'))";
$query = mysqli_query($con,$sql);
if ($query) {
  alert("บันทึกข้อมูลรายชื่อเรียบร้อยเเล้ว");
}
mysqli_close($con);
?>
<meta http-equiv="refresh" content="1;URL=viewform.php">
