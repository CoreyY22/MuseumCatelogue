
<html>
<head>
  <title>Anteiku Tours</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/in.css" rel="stylesheet">

  <?php
    include "connection.php"; 
    include "index3.php";

    session_start();
   
    $r_id = $_SESSION['username'];

    $data = ("SELECT `r_chkindt` FROM reservation WHERE `Userid`='$r_id'");

    $retrieve_data = mysqli_query($con, $data);

   while($res = mysqli_fetch_assoc($retrieve_data)){
      $date = $res['r_chkindt'];
    }

    $data = ("SELECT `r_type` FROM reservation WHERE `Userid`='$r_id'");

    $retrieve_data = mysqli_query($con, $data);

     while($res = mysqli_fetch_assoc($retrieve_data)){
      $type = $res['r_type'];
    }



    $mysqlget = ("select `GYD` from tariff where `type`='$type'");

    $retrive_price=mysqli_query($con, $mysqlget);

    while($res = mysqli_fetch_assoc($retrive_price)){
     $price = $res['GYD'];
    }



    ?>
  </head>

  <br>
  <br>
  <body>
  
  <h2>Hello <strong> <?php echo $_SESSION['username']; ?></strong>, this is your tour history. Any changes to booked tour dates please contact customer services. </h2>

  <table class="table table-striped">

    <thead>
        <tr>
            <th>Transaction Type: <?php echo $type; ?> </th>
            <th>Date/Time <?php echo $date; ?></th>
            <th>Price :<?php echo $price; ?></th>
        </tr>
    </thead>





	</table>
	</body>



  <footer>
  <ul>
  <li><strong><a href="logout.php">Logout</a></strong></li>
   <li><strong><a href="portfolio.php">Home</a></strong></li>
   </ul>

  </footer>

</html>