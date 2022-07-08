<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location: login-zzy.php");
    exit();
}
?>