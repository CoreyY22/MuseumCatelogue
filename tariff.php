<html>
<head>
	<title>Accomodation</title>
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
	
</head>

<body>
<?php
	include "index1.php";
?>

<div id = "heading">
	<h1><font color='black' size=10>Touring Tariffs</font></h1>
</div>

<?php
	include "connection.php";
	$qrysel="select * from tariff";
	$rs=mysqli_query($con,$qrysel);

	if(!$rs)
	{
		echo "<font color=purple size=4>In correct mysql select Query.</font>";
		die($qrysel);
	}
	echo "<center>";
	echo "<table class=table>";
	echo "<caption><font color='black' size=6><b><i>Tariffs</i></b></font></caption>";
	echo "<tr><th><font color='black' size=5>Type</font></th><th><font color='black' size=5>Price</font></th>";

	while($v=mysqli_fetch_array($rs))
	{
		echo "<tr>";
		echo "<td>".$v['type']."</td>";
		echo "<td>".$v[1]."</td>";
			
		echo "</tr>";
	}
	echo "</table>";
?>
<br><br>
<center><table>
<tr>
	<td>
	<ul type=square>
					
		</ul>
	</ul>
</table>
<br />

 <footer>
   <tr>
   <td width="1000" valign="bottom">
   
	    <p>2017 Anteiku Tour Groups. All rights reserved. No part of this site may be reproduced without our written permission.</p>
	  
   <p id="demo"></p>
   <script>
document.getElementById("demo").innerHTML = Date();
</script>
   </footer>
</body>
</html>
