<?php 
session_start();
        if(isset($_POST['Username'])){
				//connection
                  include("connect.php");
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = ($_POST['Password']);
				//query 
                  $sql="SELECT * FROM users Where Username='".$Username."' and Password='".$Password."' ";
 
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
 
                      $row = mysqli_fetch_array($result);
 
                      $_SESSION["UserID"] = $row["id"];
                      $_SESSION["Users"] = $row["users"];
                      $_SESSION["Userlevel"] = $row["userlevel"];
 
                      if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
 
                        Header("Location: index1.php");
 
                      }
 
                      if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                        Header("Location: user_page.php");
 
                      }
 
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
 
        }else{
 
 
             Header("Location: form.php"); //user & password incorrect back to login again
 
        }
?>