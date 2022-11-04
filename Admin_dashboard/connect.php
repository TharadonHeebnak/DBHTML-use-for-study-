<?php
    $servername ="127.0.0.1";
    $username ="root";
    $dbname = "adm";
    $password ="";
    $con = mysqli_connect("$servername","$username","$password","$dbname");

    //mysqli_connect("localhost","root","");
    //mysqli_connect คำสั่งในการเชื่อมต่อฐานข้อมูล mysql("localhost","root","");
    //ตรวจสอบการเชื่อมต่อ
    if(!$con){
        die("can't connect ".mysqli_connect_error());
    }
    //echo "connected mysql สำเร็จ";
?>