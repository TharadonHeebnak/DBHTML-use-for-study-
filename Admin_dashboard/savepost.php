<?php
include 'connect.php';
function alert($msg) {
  echo "<script type='text/javascript'>alert('$msg');</script>";
};
$sql = "INSERT INTO notify (post,datepost) VALUES ('".$_POST["textpost"]."'
,'".$_POST["textpostdate"]."')";
$query = mysqli_query($con,$sql);
if ($query) {
  alert("บันทึกข้อมูลรายชื่อเรียบร้อยเเล้ว");
}
mysqli_close($con);
?>
<meta http-equiv="refresh" content="1;URL=index.php">
