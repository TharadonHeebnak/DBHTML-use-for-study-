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
    <title>เพิ่มการเเจ้งเตือน</title>
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
                                <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <textarea name="textpost" rows="20" cols="145"></textarea>
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