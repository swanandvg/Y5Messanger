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

<body>


<?php
$cur_date = date("Y-m-d");
//echo $cur_date;
//strtotime($date1)<strtotime($date2)

$result =  mysqli_query($con,"SELECT * FROM tbl_message where cat_id=".$_GET['cat_id']." ORDER BY msg_id DESC");
$flag=false;
while($row = mysqli_fetch_array($result))
  {
  if (strtotime($row['msg_end_date']) > strtotime($cur_date))
{
	$flag=true;
  $tmp_date = date("d M, Y", strtotime($row['msg_end_date']));
  echo $row['msg_body'] . "<br /><br />valid upto " . $tmp_date."<br />";
  $res2=mysqli_query($con,"Select * from tbl_ls where ls_id=".$row['ls_id']);
  while($row2=mysqli_fetch_array($res2))
  echo "Only at <a href='shop_view.php?ls_id=".$row['ls_id']."'>".$row2['ls_name']."</a><br /><br /><hr>";}
  //echo "<br>";
  
  //echo "<li><a href='cat_view.php?cat_id=".$row['cat_id']."'>".$row['cat_name']."</a></li>";
  }
  if(!$flag)
  echo "No advertisements found in this category";

  ?>
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
