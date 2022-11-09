<?php
        if (!$_SESSION["UserID"]){
     
            Header("Location: login.php");
       
      }else{} //show detail login}
?>
<header>
    <div class="search-wrapper">
        <span class="ti"></span>
    </div>
    
    <div class="social-icons">
    
    <h3><?php print_r($_SESSION["Users"]);?></h3> <!--show detail login-->
        <span class="ti-bell"></span>
        <span class="ti-comment"></span>
        <div><img src="/DBHTML/Admin_dashboard/img/smols.jpg" alt="smol" width="40"></div>
    </div>
</header>