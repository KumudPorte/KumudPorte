

<?php
session_start();

if(!isset($_SESSION['uname']))
{
		echo"<script>
			window.location='login.php';
			</script>
		";

}

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.1/annyang.min.js"></script>
<script src="ip.js"></script>

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


	<div id="id" align="center">Compose Mail</div>
	<form action="send.php" method="post" enctype="multipart/form-data">
    <table id="id5"  width="700">
   <tr><td> MAIL TO</td>
   <td> <input id="mail" type="text" name="a1"><br></td></tr>
   <tr><td> SUBJECT</td>
     <td><input id="subject" type="text" name="a2"><br></td></tr>
   <tr><td> DESCRIPTION </td><td>
      <input id="description" type="text" name="a3"><br></td></tr>
   <tr><td> MAIL  </td>
      <td> <input id="To" type="text" name="a4"><br></td>
      <tr><td colspan="2">
       <input id="send" type="submit" value="send"></td></tr>
       </table>
       </form>
       
<?php
include_once("footer.php");
?>   
</body>
</html>