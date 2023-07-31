<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    

    <title>Online Notice Board User Dashboard</title>
	<style>
	html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
	.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}



</style>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/dashboard.css" rel="stylesheet">
    <script type="text/javascript" scr="js/bootstrap.min.js"></script>
    <script type="text/javascript" scr="js/jquery_library.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
<body>


    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class=" navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>
    <!-- <br><br><br><br><br> -->
   <h2> 	Team Member</h2>
<br>


<div class="row">
  <div class="column">
    <div class="card">
    
      <div class="container">
        <h2>Shweta Nikunj</h2>
        <p class="title">member</p>
        
        <p>shwetanikunj99@gmail.com</p>
        <p><button>Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
     
      <div class="container">
        <h2>Kumud Porte</h2>
        <p class="title">memeber</p>
        <p>kumudporte0805@gmail.com.com</p>
        <p><button>Contact</button></p>
      </div>
    </div>
  </div>
  
  
</div>
    <script src="../js/bootstrap.min.js"></script>
    
  </body>
</html>
