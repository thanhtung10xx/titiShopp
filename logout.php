<?php
session_start();
if (isset($_SESSION['firstName']) && $_SESSION['firstName'] != NULL){
    unset($_SESSION['firstName']);
}
echo "<script>window.open('home.php','_self')</script>";
?>
?>