<?php
session_start();
?><html>
<head>
	<script language=javascript src="function.js">
	</script>
	<script language=javascript>

		function checkout()
		{
			var i=0;
			for(x=0;x<document.f1.elements.length;x++)
			{
				if(document.f1.elements[x].value=="")
				{
					f1.txtname.focus();
					alert("Pls Enter All Value");
					i=1;
					break;
				}
			}

			if(i==0)
			{
				f1.method="POST";
				f1.action="address.php";
				f1.submit();
			}
		}
	</script>
</head>
<body bgcolor="#fff">
<?php
	include "connection.php";
	include "index3.php";
?>
<br><br>
<form action="address.php" method="POST" name="f1">
<br><br>
<table  border=0 align=center>
<tr>
	<th align=left>Tour Date   :</th>
	<td>
		 <input type="date" name="cid" max="2979-12-31" ><br>
	</td>
</tr>

<tr>
	<th align=left>No of Persons attending tour (for catering purposes) :</th>
	<td><select name=txtpersons>
	<?php
	for($i=1;$i<=10;$i++)
	{
		echo "<option value=$i>$i</option>";
	}
	?>
	</select></td>
	</tr>
	<tr>
	<th align=left>Desired Tour Location :</th>
	<td>
	<?php
		echo "<select name=destination>";
		$qup="select * from destination";
		$con=mysqli_connect("localhost:3307","root","","reservation");
		$rs=mysqli_query($con,$qup);
		while($res=mysqli_fetch_row($rs))
		{
			echo "<option value='".$res[0]."'>".$res[0]."</option>";
		}
		echo "<select>";
		echo "</td>";
	?>
	</tr>
	<th align=left>Type   :</th>
	<td>
	<?php
		echo "<select name=txttype>";
		$qup="select * from tariff";
		$con=mysqli_connect("localhost:3307","root","","reservation");
		$rs=mysqli_query($con,$qup);
		while($res=mysqli_fetch_row($rs))
		{
			echo "<option value='".$res[0]."'>".$res[0]."</option>";
		}
		echo "<select>";
		echo "</td>";
	?>
	<th>Tariffs:</th> 
<td>|Standard - (GYD $2500) (USD $12)|| Deluxe - (GYD $3000) (USD$ 14)||Super Deluxe - (GYD$3800) (USD$18)|</td>



<tr>
	<th align=left>Full Name   :</th>
	<td colspan=4><input type=text name=txtname size=50></td>
</tr>
<tr>
	<th align=left>Email   :</th>
	<td colspan=4><input type="text" name="txtemail" size=50></td>
</tr>
<tr>
	<th align=left>Company   :</th>
	<td colspan=4><input type=text name=txtcompany size=50></td>
</tr>
<tr>
	<th align=left>Telephone   :</th>
	<td colspan=4><input type="text" name="txtnumber" size=15 ></td>
</tr>
<tr>
	<th align=left valign=top>Address   :</th>
	<td colspan=4><textarea name=txtaddress rows=5 cols=40></textarea></td>
</tr>
<tr>
	<th align=left>Special Requirements (if necessary):</th>
	<td colspan=4><textarea name=txtspanyreq rows=5 cols=40></textarea>
</tr>
<br />
<br />
<tr>
	<td colspan=2 align=center><input type=button name=s1 value="submit" onClick="checkout()">
	<input type=reset name=s2 value="clear"><a href=reservation.php></a></td>
</tr>
</table>
</form>
<ul>
<li><strong><a href="portfolio.php">Back</a></strong></li>
<ul>

</body>
</html>
