<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	
	<script type =  "text/javascript">

var images = new Array ();
images [0] = "";
images [1] = "";
images [2] = "";
images [3] = "";
var next = 0;

function slideShow()

{
if(next < 4)
{
 document.getElementById("show").src = images[next];
 next++;


 if(next == 4)
 
 {
    next = 0; 
    
 }
 setTimeout ("slideShow()",5000);

}

}

</script>

<style>
	
	 body {
  margin: 0;
  padding: 0;
  background: #ccc;
  background-image: url(image/);
  background-repeat: no-repeat;
  background-size: 100% 1250px;
}
	
	 </style>

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
	      </ul>
				<ul class="nav navbar-nav navbar-right">
        <li><a href="process-log-out.php">Logout</a></li>
      </ul>
	    </div>
	  </div>
	</nav>
	<br>
	<br>

	<div class="container-fluid" >
		<img src="image/TVlogo.jpg" width=100% height=15%>
		
	</div>
	
	<table style="width:100%;" border="0">
  
  <center>
   <h1>Welcome To The National Museum</h1>
   </center>
   
   <center>
   
	
  </center>
  
	</table>
	
	

	
	<img id = "show" src = "image/" width=100% height=600>

<script>

slideShow(); 

</script>
	<br />
	<script src="js/bootstrap.min.js"></script>
	
	 <footer>
   <tr>
   <td width="1000" valign="bottom">
   
	    <p>True Vision Enterprises. All rights reserved. No part of this site may be reproduced without our written permission.</p>
	  
   <p id="demo"></p>
   <script>
document.getElementById("demo").innerHTML = Date();
</script>
   </footer>
	   </div>
	  </td>
	</tr>
	<br>
	
</body>
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

</html>
