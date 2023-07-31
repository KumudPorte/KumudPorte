<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<div class="container">
  <div style="text-align:center">
	<div class="container">
            <div class="imagebg"></div>
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <h2>Feedback form</h2> 
                    <p> Please provide your feedback below: </p>
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>How do you rate your overall experience?</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="good" >
                                        Good 
                                    </label>
                                </p>
  
  </div>
  <div class="row">
    <div class="column">
      <img src="images.jpg" style="width:100%">
    </div>
    <div class="column">
      <form>
        <label for="email">email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">message</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input id="submit" type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

<?php
if(isset($_REQUEST['submit']))
{
	$con=mysqli_connect('localhost','root','');
	$sql=mysqli_select_db($con,'feedback');
	$u1=$_REQUEST['a'];
	$u2=$_REQUEST['b'];
	$u3=$_REQUEST['c'];
	$u4=$_REQUEST['d'];
	 if(move_uploaded_file($tmp,$u6))
    {
	$q="insert into feebacktbl values('$u1','$u2','$u3','$u4')";
	$rs=mysqli_query($con,$q);
	if($rs)
	{
		echo"<script>
			alert('Register Sucessfully');
			window.location='login.php';
			</script>
		";
	}
	else
	{
		echo"unsucessful";
	}
	}
	}

?>
<script>
  if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var commands = {
    'write Email *tag': function(variable){
        let email = document.getElementById("email");
        email.value = variable.split(" ").join("");
    },

    'write name *tag': function(variable){
        let name = document.getElementById("name");
        name.value = variable.split(" ").join("");
    },
    'write message*tag': function(variable){
        let subject = document.getElementById("subject");
        subject.value = variable;
    },
    'submit': function(){
      document.getElementById("#submit").click();
  }
  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening. You can call this here, or attach this call to an event, button, etc.
  annyang.start();
}
</script>
</body>
</html>
<?php
include_once("footer.php");
?>