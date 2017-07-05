<?php 
include ("check_session.php");
$ls_id=$_SESSION['ls_id'];
include ("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sent Messages</title>
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
          <li class='active'><a href="sent_messages.php">Sent Messages</a></li>
          <li><a href="settings.php">Settings</a></li>
          <li><a href="#">Rem Subscription : XX</a></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>

      	
      
            


</div>
<div class="footer">

<?php
$result = mysql_query("SELECT * FROM tbl_message where ls_id=".$ls_id." ORDER BY msg_id DESC");
echo "<center><table border='3' align='center'>"; 
echo "<tr>";
echo "<th>Category</th>";
echo "<th>Message</th>
<th>Duration</th>
<th>Action</th>
</tr>";
if(!$row_msg_list = mysql_fetch_array($result))
{
	echo "<tr><td colspan='4'><center>No Messages are Available...!!!</center></td></tr>";
}

$result = mysql_query("SELECT * FROM tbl_message where ls_id=".$ls_id." ORDER BY msg_id DESC");

$limit=15;
$msg_count=0;
$result_set = mysql_query("SELECT * FROM tbl_message where ls_id=".$ls_id." ORDER BY msg_id DESC");
		while($row_msg_list = mysql_fetch_array($result_set))
		{
			$msg_count +=1;
		}
		$no_of_page =(int)($msg_count / $limit);
		$remain_msg = $msg_count % $limit;
		if( $remain_msg <> 0 || $no_of_page==0)
		$no_of_page += 1;
		
		$loop_counter=0;
		echo $_GET['msg_list_page'];
		
while($row_msg_list = mysql_fetch_array($result))
  {
	  	
			if($loop_counter < ($limit * ($_GET['msg_list_page']-1))) 
		{
		$loop_counter +=1;
		continue;
	}
  	if($loop_counter == ($limit * $_GET['msg_list_page'])) break;
			
			$sql_fetch= mysql_query("SELECT * FROM tbl_message where ls_id=".$ls_id);
	  		//$result_friend_name = mysql_query($sql_fetch_name);
				while($row_name = mysql_fetch_array($sql_fetch))
  				{
					echo "<tr>";
					$msg_body = $row_name['msg_body'];
					$start = $row_name['msg_start_date'];
					$end = $row_name['msg_end_date'];
					
					$temp = (int) $row_name['cat_id'];
					$temp_cat_result = mysql_query("SELECT * FROM tbl_msg_cat where tbl_msg_cat.cat_id =".$temp);
					$temp_cat = $temp_cat_result['cat_name'];
					  echo "<td>" . $temp_cat/*_result['cat_name']*/ . "</td>";
  					  echo "<td>" . $msg_body . "</td>";
					  echo "<td>" . $start." to ".$end. "</td><td>";
					  ?>
					  <?php /* CODE FOR IMAGES AND LINKS FOR EDIT AND DELETE IMAGE */echo "</td></tr>" ;
					   				
		  		}
				$loop_counter++;
	}	  
 echo "</table>";
 echo "</center>";


?> <br><br><br><br>
<?php if($_GET['msg_list_page'] <> 1)
	{ ?> 
	<a href="sent_messages.php?msg_list_page=<?php echo $_GET['msg_list_page']-1;?>">
	back</a>
	<?php }
		 if($_GET['msg_list_page'] <> $no_of_page)
	{ ?>
	
	<a href="sent_messages.php?msg_list_page=<?php echo $_GET['msg_list_page']+1;?>">
	next </a>
	<?php }
	?>

<div class="footer">
<center>Created by 1310, Matoshri College of Engineering, Nashik
<br><a href="about_us.html">About US</a></center>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>