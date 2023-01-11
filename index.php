<?php session_start(); ?>
<?php 
if(@$_SESSION['status']){
    include "dashboard.php";
}else{
    include "login.php";
}
?>