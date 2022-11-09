<?php 
include 'connect.php';
    $id = $_GET["id"];
    $sql = "delete from notify where postid  = '".$id."'";
    $query = mysqli_query($con,$sql);
    if (mysqli_affected_rows($con)) {
        # mysqli_affected_rows($con) ฟังก์ชั่นตรวจสอบข้อมูลที่มีการเปลี่ยนแปลง เช่น แก้ไข ลบ
        /* echo "ลบแล้ว"; */
    }
    mysqli_close($con);
?>
<meta http-equiv="refresh" content="1,URL=index.php">