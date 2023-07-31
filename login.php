<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="js/responsiveVoice.js"></script>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
<script src="log.js"></script>

<div id="container">

    <header> 
	<div class="width">
    		<h1><a href="admin.php">COLLEGE</a></h1>

		<nav>
	
    			<ul class="sf-menu dropdown">
                
                <li><a href="home.php">Home</a></li>
                
                <li><a href="login.php">Login</a></li>
                
 <li><a href="registration.php">Sign Up</a></li>
 <li><a href="loginHelp.html">Help</a></li>



			</ul>

			
			<div class="clear"></div>
    		</nav>
       	</div>

	<div class="clear"></div>

       
    </header>


   <div id="body" class="width">
   <div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<section id="content" class="one-column">
<form action="loginchk.php" method="post" enctype="multipart/form-data" onsubmit='responsiveVoice.speak("<?php echo " User name and password submitted"; ?>", "UK English Male");'>
        <input id="x" type="text" name="x"  placeholder="Email ID" class="input" />
        <BR />
        <input id="y" type="password" name="y" placeholder="Password"  class="input"/>
        <br />
        <input type="submit" value="login" id="submit" />
    </form>

</section>
<?php
include_once("footer.php");
?>


<script>
    //onload(responsiveVoice.speak("Welcome to the Voice Based Email System ","UK English Male"),1500);
</script>

</body>
</html>