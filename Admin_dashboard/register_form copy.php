<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ฟอร์มสมัคร</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="main-content">
    <main-content><main>
        <H1>สมัครรายชื่อเข้าใช้</H1>
    <form name="addata" action="savedata.php" method="post">
            <table border="1" width="300">
                <tr>
                    <td>ชื่อ</td>
                    <td><input type="text" name="textfirstname" size="30"></td>
                </tr>
                <tr>
                    <td>นามสกุล</td>
                    <td><input type="text" name="textlastname" size="30"></td>
                </tr>
                <tr>
                    <td>username</td>
                    <td><input type="text" name="textusername" size="30"></td>
                </tr>
                <tr>
                    <td>เบอร์โทร</td>
                    <td><input type="number" name="textphone" size="30"></td>
                </tr>
                <tr>
                    <td>รหัสผ่าน</td>
                    <td><input type="password" name="textpass" size="30"></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="ตกลง">
        </form>
    </main></main-content>
    

</div>
</body>

</html>