<?php
include 'connect.php';
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
};
$sql = "INSERT INTO rooms (roomid,userroom,typeroom,price,startdate) VALUES ('".$_POST["textroomid"]."'
,'".$_POST["textuserroom"]."'
,'".$_POST["texttyperoom"]."'
,'".$_POST["textprice"]."'
,'".$_POST["textstartdate"]."'))";
$query = mysqli_query($con,$sql);
if ($query) {
    alert("บันทึกข้อมูลเรียบร้อยเเล้ว");
}else{
    alert("ไม่สามารถบันทึกข้อมูลเรียบร้อยเเล้ว");
}
mysqli_close($con);
?>
<meta http-equiv="refresh" content="1;URL=viewroom.php">