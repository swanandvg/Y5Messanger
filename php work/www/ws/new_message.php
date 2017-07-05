<?php 
include ("check_session.php");
$ls_id=$_SESSION['ls_id'];

?>

<?php
require_once('calendar/classes/tc_calendar.php');
include ("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Message</title>
    <meta name="description" content="New Message from Local Server to Main Server">
    <meta name="author" content="1310">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo_justified.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	<link href="calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="calendar/calendar.js"></script>

  </head>

  <body>

    <div id="container" class="container">

        <img src="images/templatemo_header_blank.jpg" class="img-responsive" />
 
        <ul class="nav nav-justified">
		
          <li class="active"><a href="new_message.php" >New Message</a></li>
          <li><a href="sent_messages.php">Sent Messages</a></li>
          <li><a href="settings.php">Settings</a></li>
          <li><a href="#">Rem Subscription : XX</a></li>
          <li><a href="logout.php">Log Out</a></li>

        </ul>

      	
      
            


</div>
<div class="footer">
<center>
<?php if(isset($_GET["msg_sent"]) && $_GET["msg_sent"]=="fail")
		  {	 
			echo "<blink><label>Last message not sent successfully</label></blink>";
		   }	 	
			  else 
			 { 
			  	if(isset($_GET["msg_sent"]) && $_GET["msg_sent"]=="success")
		  		{		 
			echo "<blink><label>Last message sent successfully</label></blink>";
		   }	 	
			  else 
			 { 
			  	echo " ";	
			}
			}		
?>

<table>
<form action="new_message_action.php" method="post" name="new_message_form">
<div class="form-group">
<tr>

<td width="10%">
<label for="New Message">New Message</label></td>
<td width="10%"></td><td><textarea rows="10" class="form-control" cols="120" placeholder="Type Your advertisement here" name="ad_body"></textarea></td></tr>
<tr>&nbsp;<tr>&nbsp;<tr>
<td> <label>Category</label>
<td><td>
<select name="category" title="Select category of your advertisement" class="form-control">
<?php
$result=mysql_query("SELECT * FROM tbl_msg_cat");
$cat_tuple = mysql_fetch_array($result);
while($cat_tuple = mysql_fetch_array($result))
{
	$id = $cat_tuple['cat_id'];
	$name = $cat_tuple['cat_name'];
	echo "<option value=$id> $name </option>";
}
?>
<option value="0">Other</option>
</select>
<tr>
<td><label>From</label><td>
<td> 
<?php
	  $myCalendar = new tc_calendar("dateFrom", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d'), date('m'), date('Y'));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2014, 2030);
	  $myCalendar->dateAllow('2014-01-01', '2030-12-01');
	  $myCalendar->setDateFormat('j F Y');
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();
  ?>
  <!-- to get the date from date picker, use "this.form.<dateNAme>.value" -->
<tr>
<td> <label>To</label><td>
<td> 
<?php
	  $myCalendar = new tc_calendar("dateTo", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d'), date('m'), date('Y'));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2014, 2030);
	  $myCalendar->dateAllow('2014-01-01', '2030-12-01');
	  $myCalendar->setDateFormat('j F Y');
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();
  ?>

</table>
 <input type="submit" value="Send" class="btn-primary" class="form-control"/>
</center></td></form>
<div class="footer">
<center>Created by 1310, Matoshri College of Engineering, Nashik
<br><a href="about_us.html">About US</a></center>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>