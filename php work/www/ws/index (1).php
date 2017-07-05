<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wi-Fi based Message Broadcasting</title>
    <meta name="description" content="New Message from Local Server to Main Server">
    <meta name="author" content="1310">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo_justified.css" rel="stylesheet">
   
  </head>

  <body>

    <div id="container" class="container">

        <img src="images/templatemo_header_blank.jpg" class="img-responsive" />
 
        <!-- <ul class="nav nav-justified">
          
          <li><a href="sent_messages.php">Sent Messages</a></li>
          <li><a href="settings.php">Settings</a></li>
          <li><a href="#">Rem Subscription : XX</a></li>
          <li><a href="logout.php">Log Out</a></li>

        </ul> -->

      	
      
            


</div>
<div class="footer">
<center>
<?php if(isset($_GET["msg"]) && $_GET["msg"]=="fail")
		  {	 
			echo "<blink><label>Please enter valid username & password</label></blink>";
		   }	 	
			  else
			 { 
			  	echo " ";	
			}		
?>

<table >
<form action="login_action.php" method="post">
<div class="form-group">
<tr>

<td width="10%">
<label >User Name</label></td>
<td width="10%"></td><td> <input type="text" name="user_name" class="form-control">
<tr>
<td> <label>Password</label>
<td><td><input type="password" name="password" class="form-control">
</table>
 <input type="submit" value="Login" class="btn-primary" class="form-control"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="button" name="forgot" value="Forgot Password" class="btn-success" />
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