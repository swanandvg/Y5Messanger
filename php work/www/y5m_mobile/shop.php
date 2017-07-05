<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 

include ("check_broadcast.php");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet">
</head>

<body bgcolor="#000000">

<div class="top-nav">
<a name="menu"> </a>
<ul>
<?php
$result =  mysqli_query($con,"SELECT * FROM tbl_ls ORDER BY ls_id DESC");

while($row = mysqli_fetch_array($result))
  {
  //echo $row['cat_id'] . " " . $row['cat_name'];
  //echo "<br>";
  
  echo "<li><a href='shop_view.php?ls_id=".$row['ls_id']."'>".$row['ls_name']."</a></li>";
  }
  
  ?>
  
  <div class="clear"> </div>
</ul>
</div>
<div class="clear"> </div>
  
 <?php /****************************************
 code for footer menu
 *********************/
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
