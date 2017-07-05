<?php

include("check_session.php");
include("connection.php");
$cpassword=$_REQUEST['cpassword'];
$npassword=$_REQUEST['npassword'];
$rpassword=$_REQUEST['rpassword'];

$user_id= $_SESSION['ls_id'];

$user_name= $_SESSION['user_name'];


$query_id="SELECT * FROM tbl_login where ls_username ='".$user_name."';";
$result_set= mysql_query($query_id);
$row = mysql_fetch_array($result_set);
$user_name=$row['ls_username'];
$password=$row['ls_password'];
if($npassword!=$rpassword)
{
echo "<script language='javascript' type='text/javascript'> window.location='settings.php?msg=error1'</script>";
}

else if($cpassword!=$password)
{
echo "<script language='javascript' type='text/javascript'> window.location='settings.php?msg=error2'</script>";
}

else if($cpassword==$password and $npassword==$rpassword)
{
$query_update="update tbl_login set ls_password='".$npassword."'where ls_username='".$user_name."';";
$result=mysql_query($query_update);

echo "<script language='javascript' type='text/javascript'> window.location='settings.php?msg=pass'</script>";
}
else
{
echo "<script language='javascript' type='text/javascript'> window.location='settings.php'</script>";
}

?>