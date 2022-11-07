<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit</title>
</head>
<body>
    <form name="roomditdata" action="save_editdata.php? id=<?php echo $_GET["id"];?>"method="post">
    <!--หลังจากเก้ไขขอมุลเล้วกดปุ่มค่าไอดีจะส่งไปที่ไฟล์รับค่าเก้ไขโดยจะส่งเบบ post เพื่อซ่อนข้อมูลที่แก้ไข address bar ต่อท้าย url-->
    <?php
    include 'connect.php';
    $sql = "select * from rooms where roomid ='".$_GET["id"]."'";
    $query = mysqli_query($con,$sql);
    $result = mysqli_fetch_array($query);
    if(!$result)
    {
        echo " ไม่พบข้อมูล roomid = ".$_GET["roomid"];
    }else
    {?>
    <table width="300"border="1">
        <tr>
            <th width="150">รหัสห้อง </th>
            <td width="240"><input type="hidden" name="textroomid" value="<?php echo $result["roomid"];?>"><?php echo $result["roomid"];?></td>
        </tr>
        <tr>
            <th width="150">ชื่อผู้เช่าห้อง </th>
            <td width="240"><input type="text" name="textuserroom" value="<?php echo $result["userroom"];?>"></td>
        </tr>
        <tr>
            <th width="150">ประเภทห้อง </th>
            <td width="240"><input type="text" name="textprice" value="<?php echo $result["typeroom"];?>"></td>
        </tr>
        <tr>
            <th width="150">ราคา </th>
            <td width="240"><input type="text" name="textstartdate" value="<?php echo $result["price"];?>"></td>
        </tr>
        <tr>
            <th width="150">วันที่เริ่มเข้าพัก </th>
            <td width="240"><input type="text" name="textphone" value="<?php echo $result["startdate"];?>"></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="บันทึกการเก้ไข">
    <?php
    }
    mysqli_close($con);
    ?>
</body>
</html>