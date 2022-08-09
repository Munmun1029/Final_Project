<?php
session_start();
unset($_SESSION['IS_LOGIN']);
header('location:../view/login.php');
die();
?>