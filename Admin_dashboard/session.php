<?php
session_start();
if($_SESSION["Userlevel"]=="A"){
    include 'sidebar.php';
}else{    
    include 'sidebarM.php';
};
?>
