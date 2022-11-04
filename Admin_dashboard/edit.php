<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit</title>
</head>
<body>
    <form name="formeditdata" action="save_editdata.php?id=<?php echo $_GET["id"];?>"method="post">
    <!--หลังจากเก้ไขขอมุลเล้วกดปุ่มค่าไอดีจะส่งไปที่ไฟล์รับค่าเก้ไขโดยจะส่งเบบ post เพื่อซ่อนข้อมูลที่แก้ไข address bar ต่อท้าย url-->
    <?php
    include 'connect.php';
    $sql = "select * from users where id ='".$_GET["id"]."'";
    $query = mysqli_query($con,$sql);
    $result = mysqli_fetch_array($query);
    if(!$result)
    {
        echo " ไม่พบข้อมูล id = ".$_GET["id"];
    }else
    {?>
    <table width="300"border="1">
        <tr>
            <th width="150">ลำดับลูกค้า </th>
            <td width="240"><input type="hidden" name="textid" value="<?php echo $result["id"];?>"><?php echo $result["id"];?></td>
        </tr>
        <tr>
            <th width="150">ชื่อลูกค้า </th>
            <td width="240"><input type="text" name="textfirstname" value="<?php echo $result["firstname"];?>"></td>
        </tr>
        <tr>
            <th width="150">นามสกุลลูกค้า </th>
            <td width="240"><input type="text" name="textlastname" value="<?php echo $result["lastname"];?>"></td>
        </tr>
        <tr>
            <th width="150">phone </th>
            <td width="240"><input type="text" name="textphone" value="<?php echo $result["phone"];?>"></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="บันทึกการเก้ไข">
    <?php
    }
    mysqli_close($con);
    ?>
</body>
</html>