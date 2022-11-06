
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
<div class="wrapper">
        <div class="logo">
            <img src="smols.jpg" alt="">
        </div>
        <div class="text-center mt-4 name">
            Register
        </div>
        <form name="frmlogin"class="p-3 mt-3"method="post" action="loginfuntion.php">
            ชื่อ
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="textfirstname" id="Password" placeholder="ชื่อ">
            </div>
            นามสกุล
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" name="textlastname" id="Password" placeholder="นามสกุล">
            </div>
            username
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="textusername" id="Password" placeholder="username">
            </div>
            เบอร์โทร
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="number" name="textphone" id="Password" placeholder="เบอร์โทร">
            </div>
            รหัสผ่าน
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="password" name="textpass" id="Password" placeholder="รหัสผ่าน">
            </div>
            <button type="submit" class="btn mt-3">บันทึกข้อมูล</button>
        </form>
    </div>
</body>
</html>






