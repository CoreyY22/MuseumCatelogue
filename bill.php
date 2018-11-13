<?php
  session_start();
?>
<html>
<head>
  <title>Bill Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
<body>

  <?php
    include "connection.php";
	include "index3.php";
    $type=$_SESSION['type'];
    $qq=mysqli_query($con,"select `GYD` from tariff where `type`='$type'");

    while($res = mysqli_fetch_assoc($qq)){
      $_SESSION['price'] = $res['GYD'];
    }
  ?>
  </head>

  <div id = "heading">
  <br>
  <br>
  <br>
    <h1>Billing</h1>
  </div>



  <div id = "heading">

    <h2>Type of Tour : <?php echo $_SESSION['type']; ?> </h2>
    <h2>Cost per Tour : <?php echo $_SESSION['price']; ?> </h2>
    <br><br>
    <h2>Thank you for visiting <strong><?php echo $_SESSION['username']?></strong></h2>
    <h2>Your reservation has been booked. Have a nice day :)</h2>

</div>
 <div id = "heading">

    <h1>Your bill amount is <?php echo $_SESSION['price']?> per Person. Proceed to print Receipt.</h1>
	</div>
	
  <div>
  <script src="js/bootstrap.min.js"></script>
  
  
  <li><strong><a href="logout.php">Logout</a></strong></li>
   <li><strong><a href="history.php">Tour History</a></strong></li>
   <li><strong><a href="portfolio.php">Home</a></strong></li>
  </div>

</body>
</html>
