<?php
    $servername ="127.0.0.1";
    $username ="root";
    $password ="";
    $dbname = "s3";
    $con = mysqli_connect("$servername","$username","$password","$dbname");
    //mysqli_connect("localhost","root","");
    //mysqli_connect คำสั่งในการเชื่อมต่อฐานข้อมูล mysql("localhost","root","");
    //ตรวจสอบการเชื่อมต่อ
    if(!$con){
        die("can't connect ".mysqli_connect_error());
    }

$sql = "INSERT INTO mytable (id,firstname,lastname,password) VALUES ('".$_POST["textid"]."','".$_POST["textfirstname"]."','".$_POST["textlastname"]."','".$_POST["textemail"]."')";
$query = mysqli_query($con,$sql);
if ($query) {
  echo "New record created successfully";
}
mysqli_close($con);
?>
<meta http-equiv="refresh" content="1;URL=selectdata.php">