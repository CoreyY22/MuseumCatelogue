<?php
	session_start();
?>

 <html>
<body bgcolor="#fff3e5">
<?php
	 $cid=$_POST["cid"];
	 $persons=$_POST["txtpersons"];
	 $type=$_POST["txttype"];
	 $destinations=$_POST["destination"];
	 $spreq=$_POST["txtspanyreq"];
	include "connection.php";


	$con=mysqli_connect("localhost:3307","root","","reservation");
	$qq=mysqli_query($con,"select * from reservation");
	$row1=mysqli_fetch_array($qq);
	$id1=mysqli_num_rows($qq)+1;


 $b_tours=0;


 
 $query = "select sum(`r_tours`) as persons from `reservation` where ('$cid' = `r_chkindt` and `r_type`='$type')";
 $new=mysqli_query($con,$query);

 while ($row = mysqli_fetch_assoc($new)) {
  		$b_tours= $row['persons'];
 }

	$totaltours_query="SELECT tottours FROM `tariff` where `type`='$type'";
	$totaltours_query_q=mysqli_query($con,$totaltours_query);
	$t_tours=0;
	while ($row = mysqli_fetch_assoc($totaltours_query_q)) {
  		$t_tours= $row['tottours'];
 }

 	$a_tours=$t_tours-$b_tours;

 	if($norm>$a_tours)
 	{
 		$message = "Sorry only ".$a_tours." remaning in ".$type." category on your chosen date:()";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='reservation.php';</script>";
 	}
 	else
 	{
		$username = $_SESSION['username'];
 	$qins=mysqli_query ($con,"INSERT INTO `reservation`
	(`r_id`,`r_chkindt`,`r_tours`,`r_type`,`r_spanyreq`,`Userid`, `destination`)VALUES
	('$id1','$cid','$persons','$type','$spreq','$username','$destinations');");

		if($qins)
		{
				 $app="update tariff set avtour=avtour-$norm where type='$type'";
				 mysqli_query($con,$app);

		}

		$username = $_SESSION['username'];

	
		
			mysqli_query ($con,"INSERT INTO `tour`
			(`tour_number`,`t_id`,`type`,`CheckIn Date`)VALUES
			('$id1','$id1','$type','$cid');");

		$qq=mysqli_query($con,"select max(tour_number) as 'maxtn' from tour");

		while($res = mysqli_fetch_assoc($qq)){
			$tourno = $res['maxtn'];
		}

		for ($x = 1; $x <= $norm; $x++) {

			$tourno = $tourno +1;

	

			mysqli_query ($con,"INSERT INTO `tour`
			(`tour_number`,`t_id`,`type`,`CheckIn Date`)VALUES
			('$id1','$id1','$type','$cid');");

		}

	$message = "Booking Successful!";

	$_SESSION['norm']=$norm;
	$_SESSION['type']=$type;

	echo "<script type='text/javascript'>alert('$message');</script>";

	echo "<script>window.location='bill.php';</script>";
 	}
	
  



?>
</body>
</html>
