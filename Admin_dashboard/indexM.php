<?php
    include 'session.php';
    include 'headbar.php';
    include 'connect.php';

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title>Home</title>
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
            <?php 

$sql = "select * from notify where datepost like '%".$strKeyword."%' ";
$query = mysqli_query($con,$sql);
?>
        <div class="main-content">
            <main>
            
                <h2 class="dash-title">หน้าหลัก</h2>

                
                <section class="recent">
                    <div class="activity-grid">
                        <div class="activity-card">
                            <h3>กระดานข้อมูลข่าวสาร</h3>
                            <form name="resechdata" method="POST" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
        <!-- $_SERVER['SCRIPT_NAME'] เช็คสคิปที่ทำงานอยู่บนเซิฟเวอร์เสมือน -->
        <table width = 700 border="1">
            <tr>
<!--                 <th>ค้นหารายชื่อ
                    <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword ?>">
                    <input type="submit" value="Search">
                </th> -->
            </tr>
        </table>
    </form>

            <div class="table-responsive">
            <table width="700" border="1">
            <tr>
            <th width= "100">วันที่โพส</th>
            <th width= "400">กระดานข่าว</th>
<!--             <th width= "100">เเก้ไขโพส</th>
            <th width= "100">ลบโพส</th> -->
                        <?php
                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
                // mysqli_fetch_array() ฟังก์ชั่นในการกึงข้อมูลแถวเป็นอาเรย์
                // MYSQLI_ASSOC สำหรับดึงค่าผลลัพธ์จากการคิวรี่ในรูปแบบของอาเรย์
                {
                    ?>  
                    <tr>
                        <td><?php echo $result["datepost"];?></td>
                        <td><?php echo $result["post"];?></td>
                        
                        <!-- <td> <a href="savepost.php?id=<?php echo $result["postid"];?>">แก้ไขข้อมูล</a></td>
                        <td> <a href="deletepost.php?id=<?php echo $result["postid"];?>">ลบข้อมูล</a></td> -->
                    </tr>
                    <?php
                  }
              ?>
            </tr>
                            </div>
                        </div>
                    </div>
                </section>
</main>

        </div>

    </body>

    </html>