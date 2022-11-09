<?php
    include 'session.php';
/*     include 'class.upload.php'; */
    include 'headbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ฟอร์มกรอกข้อมูลการเช่า</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="main-content">
    <main-content><main>
        <H1>กรอกข้อมูลการเช่า</H1>
    <form name="rentroom" action="saveroom.php" method="post">
            <table border="1" width="300">
                <tr>
                    <td>รหัสห้อง</td>
                    <td><input type="text" name="textroomid" size="5"></td>
                </tr>
                <tr>
                    <td>ชื่อผู้เช่าห้อง</td>
                    <td><input type="text" name="textuserroom" size="30"></td>
                </tr>
                <tr>
                    <td>ประเภทห้อง</td>
                    <td>
<select id="typeroom" name="texttyperoom">
  <option value="ห้องพัดลม">ห้องพัดลม</option>
  <option value="ห้องเเอร์">ห้องเเอร์</option>
  <option value="ห้องนั้นเเหละ">ห้องนั้นเเหละ</option>
</select></td>
                    
                </tr>
                <tr>
                    <td>ราคา</td>
                    <td><input type="text" name="textprice" size="30"></td>
                </tr>
                <tr>
                    <td>วันที่เริ่มเข้าพัก</td>
                    <td>
                    <input type="date" name="textstartdate" size="30">
                </td>
                </tr>
            </table>
            <input type="submit" name="submit" value="ตกลง">
        </form>
    </main></main-content>
    

</div>
</body>
<script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
</html>