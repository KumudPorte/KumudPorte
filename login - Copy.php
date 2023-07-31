
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
<div id="header"><div id="id" style="text-transform:uppercase" Mail System</div>
<div id="left">
<table width="70%" align="right">
<tr>
<td>
<div class="menu"><a href="home.php"><font color=white>Home</font></a></div>
</td>
<td><div class="menu"><a href="login.php"><font color=white>Login</font></a></div>
</td>
<td>
<div class="menu"><a href="registration.php"><font color=white>Register</font></a></div></div>
</td>
</tr>
</table>
</div>
<div id="content"><div id="id" align="center">Login</div>

	<form action="loginchk.php" method="post" enctype="multipart/form-data">
        <input type="text" name="x"  placeholder="Email ID" class="input"/>
        <BR />
        <input type="password" name="y" placeholder="Password"  class="input"/>
        <br />
        <input type="submit" value="login" id="button" />
    </form>


</div>
</body>
</html>
