<?php ob_start();
session_start();
unset($_SESSION['user']);
session_destroy();
header("Location:../home-page");
exit();
ob_end_flush();
 ?>