<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 

include ("check_broadcast.php");

?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php 

$result =  mysqli_query($con,"SELECT * FROM tbl_ls where ls_id=".$_GET['ls_id']);

while($row = mysqli_fetch_array($result))
  {
	//$tmp_date = date("d M, Y", strtotime($row['msg_end_date']));
  //echo $row['msg_body'] . "<br /><br />valid upto " . $tmp_date."<br /><br /><hr>";
  //$res2=mysqli_query($con,"Select * from tbl_ls where ls_id=".$row['ls_id']);
  //while($row2=mysqli_fetch_array($res2))
  //echo "Only at ".$row2['ls_name']."<br /><br /><hr>";}
  //echo "<br>";
  
  //echo "<li><a href='cat_view.php?cat_id=".$row['cat_id']."'>".$row['cat_name']."</a></li>";
  ?>
  <div class="top-nav">
<a name="menu"> </a>
<ul>
<li class="active"><b><font size="+2" color="#FFFFFF">
<?php  echo $row['ls_name'];?></font></b><br />
</li>
<div class="clear"> </div>
</ul>
</div>
<div class="clear"> </div>
<?php

  echo"<br /><br />Address: ".$row['ls_address']."<br />";
  echo "Phone No: ".$row['ls_phone']."<br />";
  echo "email: ".$row['ls_email']."<br />";
  echo "Website: <a target='_blank' href='http://".$row['ls_website']."'>".$row['ls_website']."</a><br />";


  }


?>

 <br />
<br />
<br />

  <div class="top-nav">
<a name="menu"> </a>
<ul>
<li class="active">
<a href="index.php" >Home</a>
</li>
<li>
<a href="category.php" >Category</a>
</li>
<li>
<a href="shop.php" >Shop</a>
</li>


<div class="clear"> </div>
</ul>
</div>
<div class="clear"> </div>
</body>
</html>
