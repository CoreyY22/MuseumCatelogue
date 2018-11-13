

<html>
<head>
  <title>Tour Details</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">



 <div id = "heading">
  <br>
  <br>
  <br>
    <h1>Tour Details</h1>
  </div>

<?php

include "connection.php";
include "index3.php";

session_start();
 $r_id = $_SESSION['username'];
 
 $data = ("SELECT * FROM reservation WHERE `Userid`='$r_id'");

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
  
  <body>
 <?php
 

echo"<table align='center'>";
echo"<td>";
echo"<tr>";
echo"<th style='text-align:center;border-bottom:thin solid;padding:15px;'>"."User Name."."</th>";
echo"<th style='text-align:center;border-bottom:thin solid;padding:15px;'>"."Supplier ID"."</th>";
echo"<th style='text-align:center;border-bottom:thin solid;padding:25px;'>"."Item Name"."</th>";
echo"<th style='text-align:center;border-bottom:thin solid;padding:25px;'>"."Item Category"."</th>";
echo"<th style='text-align:center;border-bottom:thin solid;padding:25px;'>"."Unit Description"."</th>";
echo"<th style='text-align:center;border-bottom:thin solid;padding:25px;'>"."Unit Cost"."</th>";
echo"<th style='text-align:center;border-bottom:thin solid;padding:25px;'>"."Amount"."</th>";
echo"<th style='text-align:center;border-bottom:thin solid;padding:25px;'>"."Expiry"."</th>";
echo"<th style='text-align:center;border-bottom:thin solid;padding:25px;'>"."Operation"."</th>";
echo"</tr>";
echo"</td>";


while($row=mysqli_fetch_array($results))
{
  echo"<tr>";
  echo"<td style='border-bottom:thin solid;text-align:center;padding:3px'>".$row['Userid']."</td>";
  echo"<td style='border-bottom:thin solid;text-align:center;padding:3px'>".$row['supplierID']."</td>";
  echo"<td style='border-bottom:thin solid;text-align:center;padding:3px'>".$row['itemName']."</td>";
  echo"<td style='border-bottom:thin solid;text-align:center;padding:3px'>".$row['itemCategory']."</td>";
  echo"<td style='border-bottom:thin solid;text-align:center;padding:3px'>".$row['unitDescription']."</td>";
  echo"<td style='border-bottom:thin solid;text-align:center;padding:3px'>".$row['unitCost']."</td>";
  echo"<td style='border-bottom:thin solid;text-align:center;padding:3px'>".$row['amount']."</td>";
  echo"<td style='border-bottom:thin solid;text-align:center;padding:3px'>".$row['expiry']."</td>";
  echo"<td style='border-bottom:thin solid;text-align:center;padding:3px'>"."<button>"."Delete/Dump"."</button>"."</td>";
  echo"</tr>";
}

echo"</table>";*/



?>

</body>
</html>
