<?php
        if (!$_SESSION["UserID"]){
     
            Header("Location: login.php");
       
      }else{} //show detail login}
?>
<header>
    <div class="search-wrapper">
        <span class="ti-search"></span>
        <input type="search" placeholder="Search">
    </div>
    
    <div class="social-icons">
    <?php print_r($_SESSION["Users"]);?> <!--show detail login-->
        <span class="ti-bell"></span>
        <span class="ti-comment"></span>
        <div></div>
    </div>
</header>