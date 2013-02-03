<?php 
session_start();
unset($_SESSION['suser']);
session_destroy();
header("Location:../index.php");
?>