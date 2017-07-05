<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
include ("connection.php");

?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>


<?php
$result =  mysqli_query($con,"SELECT * FROM tbl_broadcast");

while($row = mysqli_fetch_array($result))
  {
  if ($row['broadcast']==0)
{
	  echo "<script language='javascript' type='text/javascript'> window.location='broadcast_off.php' </script>";
  }
  }

  ?>
</div>

</body>
</html>
