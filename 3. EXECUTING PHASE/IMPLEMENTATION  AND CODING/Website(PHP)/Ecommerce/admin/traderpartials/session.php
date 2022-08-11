<?php
session_start();
if(empty($_SESSION['email'] && $_SESSION['password']))
{
   
        header('location:../login-trader.php');
   
    
}
?>