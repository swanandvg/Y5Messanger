<?php 
include ("check_session.php");
$ls_id=$_SESSION['ls_id'];
include ("connection.php");
$cat_id = $_REQUEST['category'];
$msg_body = $_REQUEST['ad_body'];
$start_date = $_REQUEST['dateFrom']
?>
<?php 
$end_date = $_REQUEST['dateTo']
?>
<?php 
$date = date('d-M-y');
		$dateTime = new DateTime($date);
		$formatted_date=date_format( $dateTime, 'Y-m-d' );
?>
<?php
/*echo  "ls_id = ".$ls_id."<br> body: ".$msg_body."<br> from: ".$start_date."<br> TO: ".$end_date."<br> cat: ".$cat_id."<br> date: ".$formatted_date;*/
$msg = str_replace("\"","\\\"",$msg_body);
//echo $msg_body;
//echo "<br>".$msg;
$query="INSERT INTO tbl_message (msg_body,msg_start_date,msg_end_date,cat_id,msg_creation_date,ls_id) values(\"".$msg."\",'$start_date','$end_date','$cat_id','$formatted_date','$ls_id')";
$result_set= mysql_query($query) or die(mysql_error());
@$msg_sent=fail;
if ($result_set)
{
@	$msg_sent = success;
}
	
echo "<script language='javascript' type='text/javascript'> window.location='new_message.php?msg_sent=$msg_sent'</script>";

?>
