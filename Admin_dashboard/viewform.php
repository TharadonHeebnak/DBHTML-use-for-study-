<?php
    include 'sidebar.html';
    include 'headbar.php';
    include 'connect.php';
?><!DOCTYPE html>
<html>
    <head>
        <title>เรียกข้อมูลมาแสดง</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            ini_set('display_errors',1);
            error_reporting(~0);
            // ตั้งค่าให้ ;php แสดง  error และปิด error
            $strKeyword = null;
            if(isset($_POST["txtKeyword"]))
            // การตรวจสอบว่าตัวแปรที่กำหนดมีการเซ็ทไว้หรือไม่ด้วยฟังก์ชั่น isset()
            {
                $strKeyword = $_POST["txtKeyword"];
            }
        ?>
        <div class="main-content">

        </div>

    <?php 

    $sql = "select * from users where firstname like '%".$strKeyword."%' ";
    $query = mysqli_query($con,$sql);
    ?>
    <div class="main-content">
    <main>
    <form name="resechdata" method="POST" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
        <!-- $_SERVER['SCRIPT_NAME'] เช็คสคิปที่ทำงานอยู่บนเซิฟเวอร์เสมือน -->
        <table width = 700 border="1">
            <tr>
                <th>ค้นหารายชื่อ
                    <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword ?>">
                    <input type="submit" value="Search">
                </th>
            </tr>
        </table>
    </form>
    <table width="700" border="1">
            <tr>
                <th width= "100">รหัสลูกค้า</th>
                <th width= "100">ชื่อลูกค้า</th>
                <th width= "100">นามสกุลลูกค้า</th>
                <th width= "100">เบอร์ติดต่อ</th>
                <th width= "100">แก้ไขข้อมูล</th>
                <th width= "100">ลบข้อมูล</th>
            </tr>
            <?php
                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
                // mysqli_fetch_array() ฟังก์ชั่นในการกึงข้อมูลแถวเป็นอาเรย์
                // MYSQLI_ASSOC สำหรับดึงค่าผลลัพธ์จากการคิวรี่ในรูปแบบของอาเรย์
                {
                  ?>  
                  <tr>
                      <td><?php echo $result["id"];?></td>
                      <td><?php echo $result["firstname"];?></td>
                      <td><?php echo $result["lastname"];?></td>
                      <td><?php echo $result["phone"];?></td>
                      <td> <a href="edit.php?id=<?php echo $result["id"];?>">แก้ไขข้อมูล</a> </td>
                      <td> <a href="delete.php?id=<?php echo $result["id"];?>">ลบข้อมูล</a></td>
                  </tr>
                  <?php
                }
            ?>
    </table>
    </main>
    </div>
    
    
                <?php
                mysqli_close($con);
                ?>
    </body>
</html>

