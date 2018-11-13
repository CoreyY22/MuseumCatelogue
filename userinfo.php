<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>registration form</title>
<script language="JavaScript">
function RePasswordValidataion(sPassword,sRePassword)
{
	if(sPassword.toString()!=sRePassword.toString())
	{
		alert("Re-Type Password Has to be same as the Password");
		return false;
	}
	else
        {
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            $_SESSION["id"] = $id;
            redirect("accomodation.php"); 
        }
}


</script>
<style type="text/css">
<!--
.style3 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
.style4 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
	color: #C60063;
}
.style6 {font-family: Georgia, "Times New Roman", Times, serif; font-style: italic; color: #99FF66; }
.style10 {font-size: 5}
-->
</style>
<?php
include "index6.php";
?>
</head>
<body>



<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<TR></tr>
<form action="process-sign-up.php" method="post" name="userinfo"><TR></tr>
<br />

<table  class = "table" align="center" width="380" border="3" cellspacing="1" cellpadding="1">
<tr>
		<th align=left>Full Name :</th>
		<td colspan=4><input type=text id="FullName" name="name" placeholder="Your Name" required size=50></td>
	</tr>
	
	<tr>
		<th align=left>Email   :</th>
		<td colspan=4><input type="text" id="FUllName" name="email" placeholder="Your Email" required size=50></td>
	</tr>
	
  <tr>
    <td><span class="style1"><strong>Enter password:</strong></span></td>
    <td><input type="password" id="FullName" name="password" placeholder="Your Password" required maxlength="10" /></td>
  </tr>
  
  <tr>
    <td><span class="style1"><strong>Confirm password:</strong></span></td>
    <td><input type="password" name="password2" placeholder="Retype Password" maxlength="10" onchange="return RePasswordValidataion(document.userinfo.password.value,document.userinfo.password2.value)"/></td>
  </tr>


</table>
<br />

	<div align="center"><input class="button" type="submit" value="Submit" name="ok" align="right" />
	<input name="reset" type="reset" value="Reset"/>
</div>
</form>
</body>
</html>
