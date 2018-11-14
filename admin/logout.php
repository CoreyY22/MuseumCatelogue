<?php

    // enable sessions
    session_start();

    // delete cookies, if any
    setcookie("user", "", time() - 3600);
    setcookie("pass", "", time() - 3600);

    // log user out
    setcookie(session_name(), "", time() - 3600);
    session_destroy();
?>

<!DOCTYPE html>

<html>
  <head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
    <title>Log Out</title>
  </head>
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Museum Homepage</a>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	   	         <li><a href="../viewartifacts.php">View Artifacts</a></li>
				
	      </ul>
				<ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Login</a></li>
		
		  </ul>
	    </div>
	  </div>
	</nav>
	<br>
	<br>
		
  <body>
   <br>
   <h1>You are logged out!</h1>
 
  </body>
</html>
