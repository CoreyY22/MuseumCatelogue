<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<title>index page</title>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Museum Homepage</a>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href=home.php>Home</a></li>
	        <li><a href=accommodation.php>View Artifact</a></li>
					<li><a href=tariff.php>TBD</a></li>
					<li><a href=aboutus.php>About Us</a></li>
					<li><a href=admin/index.php>Admin Login</a></li>
					
	      </ul>
				<ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Login</a></li>
	      </ul>
				
	    </div>
	  </div>
	</nav>
	<script src="js/bootstrap.min.js"></script>
	
	
	<?php
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   if( isset( $_SESSION['email'] ) )
      {
	   $name = $_SESSION["name"];
   echo "<p class=\"LogOut\">". $name. " "."<a href=\"process-log-out.php\">Log Out</a></p>";
   }
    
?>
</body>


</html>
