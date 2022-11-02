<?php
include 'sidebar.html';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ฟอร์มกรอกข้อมูล</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="main-content">

    <header>
        <div class="search-wrapper">
            <span class="ti-search"></span>
            <input type="search" placeholder="Search">
        </div>

        <div class="social-icons">
            <span class="ti-bell"></span>
            <span class="ti-comment"></span>
            <div></div>
        </div>
    </header>
    <main-content><main>
    <form name="addata" action="savedata.php" method="post">
            <table border="1" width="300">
                <tr>
                    <td>ลำดับ</td>
                    <td><input type="text" name="textid" size="5"></td>
                </tr>
                <tr>
                    <td>ชื่อ</td>
                    <td><input type="text" name="textfirstname" size="30"></td>
                </tr>
                <tr>
                    <td>นามสกุล</td>
                    <td><input type="text" name="textlastname" size="30"></td>
                </tr>
                <tr>
                    <td>เบอร์โทร</td>
                    <td><input type="number" name="textphone" size="30"></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="ตกลง">
        </form>
    </main></main-content>
    

</div>
</body>

</html>