<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

<!--
hallux, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

Download: http://zypopwebtemplates.com/

License: Creative Commons Attribution
//-->
</head>
<body>
<div id="container">

    <header> 
	<div class="width">
    		<h1><a href="admin.php">COLLEGE</a></h1>

		<nav>
	
    			<ul class="sf-menu dropdown">
                



<?php

include_once('menu.php');


?>

</ul>

			
			<div class="clear"></div>
    		</nav>
       	</div>

	<div class="clear"></div>

       
    </header>


   <div id="body" class="width">

	<section id="content" class="one-column">
<form>
<?php
session_start();

//$email=$_SESSION['uname'];

if(isset($_SESSION['email'])){
$con = mysqli_connect('localhost','root','');
$sql=mysqli_select_db($con,'mail');

$query="select *from logintbl where uname='$email'";
$rs=mysqli_query($con, $query);
		if($row=mysqli_fetch_row($rs))
		{
		echo"<table style='color:white;'><tr><td>
		<div id='id4'>
		Email:
		$row[0]<br><div id='id4'>
		Branch:$row[2]<br></div><div id='id4'>
		Mobileno:$row[3]<br></div><div id='id4'>
		address:$row[4]<br></div>
		</div></td><td>
		<div id='id3'>
		<img src='$row[5]' height=250px width=250px>
		</div></td></tr></table>
		
		";
		
		}
	}

?>

</form>

<?php
include_once("footer.php");
?>
</body>
</html>