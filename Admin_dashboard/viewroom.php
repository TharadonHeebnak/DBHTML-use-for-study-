<?php
include 'connect.php';
include 'session.php';
include 'headbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ห้องพัก</title>
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

    $sql = "select * from rooms where roomid like '%".$strKeyword."%' ";
    $query = mysqli_query($con,$sql);
    ?>
    <div class="main-content">
    <main>
    <section class="recent">
                    <div class="activity-grid">
                        <div class="activity-card">
    <form name="resechdata" method="POST" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
        <!-- $_SERVER['SCRIPT_NAME'] เช็คสคิปที่ทำงานอยู่บนเซิฟเวอร์เสมือน -->
        <table width = 1000 border="1">
            <tr>
                <th>ค้นหาหมายเลขห้อง
                    <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword ?>">
                    <input type="submit" value="Search">
                </th>
            </tr>
        </table>
    </form>
    <table width="1000" border="1">
            <tr>
                <th width= "100">หมายเลขห้อง</th>
                <th width= "100">ชื่อผู้เช่าห้อง</th>
                <th width= "100">ประเภทห้อง</th>
                <th width= "100">ราคา</th>
                <th width= "100">วันที่เริ่มเข้าพัก</th>
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
                      <td><?php echo $result["roomid"];?></td>
                      <td><?php echo $result["userroom"];?></td>
                      <td><?php echo $result["typeroom"];?></td>
                      <td><?php echo $result["price"];?></td>
                      <td><?php echo $result["startdate"];?></td>
                      <td> <a href="editroom.php?id=<?php echo $result["roomid"];?>">แก้ไขข้อมูล</a> </td>
                      <td> <a href="deleteroom.php?id=<?php echo $result["roomid"];?>">ลบข้อมูล</a></td>
                  </tr>
                  <?php
                }
            ?>
            </div></div></div>
    </table>
    </main>
    </div>
    
    
                <?php
                mysqli_close($con);
                ?>
    </body>


</body>
</html>