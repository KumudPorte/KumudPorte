<script src="../fancy/fancyBox-master/jquery-1.9.1.js"></script>
<script src="jquery.airport-1.1.source.js">
</script>

<script>
$(document).ready(function(){
$('#id').airport([' Mail System']);

});

</script><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet" />
</head>

<body>
<div id="header"><div id="id" style="text-transform:uppercase">Mail System</div>
<div id="left">
<table width="70%" align="right">
<tr><td>
<div class="menu">	<a href="inbox.php">INBOX</a></div>
 </td><td> <div class="menu">  <a href="input.php">COMPOSE</a></div>
 </td><td>  <div class="menu"> <a href="logout.php">LOGOUT</a></div>
</tr>
</table>
</div>
<div id="content">
<?php
session_start();

	$name=$_SESSION['uname'];
	$a=$_REQUEST['a1'];
	$b=$_REQUEST['a2'];
	$c=$_REQUEST['a3'];
	$d=$_REQUEST['a4'];
	$e=date('y:m:d');
	$con=mysqli_connect('localhost','root','');
	$sql=mysqli_select_db($con,'mail');
	$query="insert into voiechat values(NULL,'$a','$name','$b','$e','$d','$c')";
	$rs=mysqli_query($con,$query);
	if($rs){
		echo "<h1>Successfull</h1>";
	}
	else
	{
		echo "unsuccessfull";
	}
	
	
?>
</div>
</body>
</html>