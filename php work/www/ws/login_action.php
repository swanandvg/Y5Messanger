<?php
session_start();
  $_SESSION['user_log'] = 0;
include ("connection.php");
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$row_count = 0;
if($user_name==""or $user_name==" ")
echo "<script language='javascript' type='text/javascript'> window.location='index.php?msg=fail' </script>";

$query ="select * from tbl_login where ls_username='".$user_name."' and ls_password='".$password."';";

$result_set = mysql_query($query);
$row_count = mysql_num_rows($result_set);

if($row_count==0)
{
 echo "<script language='javascript' type='text/javascript'> window.location='index.php?msg=fail' </script>";
} 
elseif($row_count>0)
 {			
 
 		/*$date = date('d-M-y');
		$dateTime = new DateTime($date);
		$formatted_date=date_format( $dateTime, 'Y-m-d' );

		
		$time=date('H:i:s',time()+19800); //19800 = 5.5*60*60
		
				
		$query = "UPDATE tbl_login (last_login_date,last_login_time) values('$formatted_date',$time') where ls_username='".$user_name."';";
	*/
	$query2 ="select * from tbl_ls where ls_name='".$user_name."';";
    $ls_info = mysql_query($query2);
	$ls_id = $ls_info['ls_id'];

	$_SESSION['user_name'] = $user_name;
		$_SESSION['user_log'] = 1;
		$_SESSION['ls_id'] = $ls_id;

	echo "<script language='javascript' type='text/javascript'> window.location='user_name2user_id.php'</script>";
	 }

?>
