
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
            Login
        </div>
        <form name="frmlogin"class="p-3 mt-3"method="post" action="loginfuntion.php">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text"   id="Username" required name="Username" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" required name="Password" id="Password" placeholder="Password">
            </div>
            <button type="submit" class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="register_form.php">Forget password?</a>
        </div>
    </div>
</body>
</html>






