<?php 
include ("check_session.php");
include ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Settings</title>
    <meta name="description" content="New Message from Local Server to Main Server">
    <meta name="author" content="1310">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo_justified.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<div id="container" class="container">

        <img src="images/templatemo_header_blank.jpg" class="img-responsive" />
 
        <ul class="nav nav-justified">
          
          <li><a href="new_message.php">New Message</a></li>
          <li><a href="sent_messages.php">Sent Messages</a></li>
          <li class='active'><a href="settings.php">Settings</a></li>
          <li><a href="#">Rem Subscription : XX</a></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
</div>


<div class="footer">
<center>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=="error1") 
		  {
			echo "<blink><label>New passwords does not match</label></blink>";
		   }
		   if(isset($_GET["msg"]) && $_GET["msg"]=="error2")
			{	 
			echo "<blink><label>Current password is wrong entered</label></blink>";
		   }	 	
			if(isset($_GET["msg"]) && $_GET["msg"]=="pass")
			{	 
			echo "<blink><label>Password changed successfully</label></blink>";
		   }
		 		
?>


<form name="change password" method="post" action="change_pwd_action.php">



<table>
<tr>
<td> <label>Curret Password </label>
<td  width="50px"> <td><input type="password" class="form-control" name="cpassword" />
<tr>
<td> <label>New Password</label>
<td><td> <input type="password" class="form-control"  name="npassword"/>
<tr>
<td><label>Retype Password</label>
<td><td> <input type="password" class="form-control"  name="rpassword"/>
<tr><tr></table>
<input type="submit" value="Change Password" class="btn-primary"/>

</form>
<br /><br /><br /><br />
<center>

</center>

<div class="footer">
<center>Created by 1310, Matoshri College of Engineering, Nashik
<br><a href="about_us.html">About US</a></center>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>