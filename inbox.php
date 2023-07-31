<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
<script src="in.js"></script>
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
<script type="text/javascript" src="js/responsiveVoice.js"></script>

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



</div>
<?php
session_start();

//if(isset($_SESSION['name']))
//{
	$con=mysqli_connect('localhost','root','');
	$sql=mysqli_select_db($con,'mail');
		$name=$_SESSION['uname'];
		$q="select * from voiechat where mailto='$name'";
		$rs=mysqli_query($con,$q);
		while($row=mysqli_fetch_row($rs))
		//while($row=mysqli_stmt_fetch(mysqli_stmt($rs)))
		{
		echo "<h4 style='color:black;'>Sent By  $row[2]<br>Mail Is    $row[5] <br> Description   $row[6]</h4><br>";
		$data="Sent By ". $row[2]." Mail IS ". $row[5]."Description".$row[6];
		?>
		
		<button id="play" class="button" onclick='responsiveVoice.speak("<?php echo $data; ?>");' type="button" value="Play" >PLAY</button>
			<br><br>
			
		<?php
		}		
	//}	//echo"<br>";
	?>
	
<?php
include_once("footer.php");
?></div>
<script>
onload(responsiveVoice.speak("now you are in inbox","UK English Male"),1500);
</script>
</body>
</html>