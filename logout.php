<?php

session_start();
session_unset();
session_destroy();
$boolLoggedin = false;
echo "
<script> 
    localStorage.clear();
    window.location = './index.php';
</script>";

// header("location: ../index.php");

?>