<?php
  session_start();
?>
<html>
<head>
  <title>Anteiku Tours</title>
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
   
  
   <h2>Welcome <strong> <?php echo $_SESSION['username']; ?></strong>, thank you for choosing Anteiku Tours. </h2>
    


  
  
  </body>
	
	
	<br>
  <footer>
  <ul>
  <li><strong><a href="logout.php">Logout</a></strong></li>
  <br>
   <li><strong><a href="reservation.php">Book a tour</a></strong></li>
   <br>
   <li><strong><a href="history.php">Tour History</a></strong></li>
   </ul>
   
  </footer>
  
  

</html>
