<?php
  session_start();
?>
<html>
<head>
  <title>National Museum</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	
	<style>

	body {
  margin: 0;
  padding: 0;
  background: #ccc;
  background-image: url(image/grey.png);
  background-repeat: no-repeat;
  background-size: 100% 1250px;
}
	
	 </style>

  <?php
    include "connection.php";
	include "index3.php";
    	
  ?>
</head>
  
  <br>
  <br>
  <body>
  
  <?php
    include "connection.php";
	include "index3.php";
   
  ?>
   
  
   <h2>Welcome <strong> <?php echo $_SESSION['name']; ?></strong> to the National Museum database. </h2>
    


  
  
  </body>
	
	
	<br>
  <footer>
  <ul>
  <li><strong><a href="logout.php">Logout</a></strong></li>
  <br>
   <li><strong><a href="addartifact.php">Add Artifact</a></strong></li>
   <br>
   <li><strong><a href="history.php">Artifact History</a></strong></li>
   </ul>
   
  </footer>
  
  

</html>
