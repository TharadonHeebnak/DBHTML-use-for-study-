<?php
    include 'session.php';
    include 'headbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<div class="main-content">
    <main>
                    <section class="recent">
                    <div class="activity-grid">
                        <div class="activity-card">
                            <h3>ข้อความ</h3>
                            <form action="savepost.php" method="post"> 
                            <?php
    include 'connect.php';
    $sql = "select * from notify where postid ='".$_GET["id"]."'";
    $query = mysqli_query($con,$sql);
    $result = mysqli_fetch_array($query);
    if(!$result)
    {
        echo " ไม่พบข้อมูล postid = ".$_GET["id"];
    }else
    {}?>
                                <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="postid" name="textpostid" size="30"value="<?php echo $result["postid"];?>">
                <textarea name="textpost" rows="20" cols="145"value="<?php echo $result["post"];?>"></textarea>
            </div>
                            
                            <div class="table-responsive">
                                <table>
                                    <thead>
                                    <div class="text-center">
                                    <input type="date" name="textpostdate" size="30">
                                    <button name="submit" value="ตกลง">
                                    <span class="ti-upload"></span>
                                    โพส
                                </button>
                                    </div>
                                    </thead></form>
                           
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
</body>
</html>