<?php
session_start();
$_SESSION['user_log'] = 0;


session_destroy();
echo "<script language='javascript' type='text/javascript'> window.location='index.php' </script>";

?>