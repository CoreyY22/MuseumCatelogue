<html>
<head>
  <title>Login Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	
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

  <?php
 session_start();
if( isset( $_SESSION['email'] ) )
     {
	 header("location: logged-index.php");
	 exit;
  }
	  include "index6.php";
	  
  ?>
  <script language="javascript" type="text/javascript">
  function fun_val()
  	{
  		var l=document.loginsell.username.value;
  		if(l=="")
  		{
  			alert("Please Enter User name");
  			document.loginsell.username.focus;
  			return false;
  		}

  		var p=document.loginsell.password.value;
  		if(p=="")
  		{
  			alert("Please Enter Password");
  			document.loginsell.password.focus;
  			return false;
			
		
  		}
  	}
  </script>

<body>

<p align="center" id="loginpage"><br><TR></tr>
<form name="loginform" action="loginsession.php" method="post"><TR></tr>
  <table font-family = "Georgia" class = "table" width="300" height="178"  align="center" cellpadding="0"cellspacing="0" border="0">
    <tr>
      <td height="41" colspan="2" align="center" ><h2><b>Admin Login Form</b></h2></td>
    </tr>
    <tr>
      <td width="170" height="40"  align="center"><font size=5><b>User Name</b></td>
      <td width="213">
         <input type="text" name="username" style="background" />
      </font></td>
    </tr>
    <tr>
      <td height="38" align="center"><font size=5><b>Password</b></td>
      <td>
        <input type="password" name="password" maxlength="8">
        </font></td>
    </tr>
    <br />
    <tr>
      <td height="48" colspan="2" align="center">
        <input type="submit"  value="Submit" name="ok" onClick="return fun_val();"/>

        <a href="userinfo.php">
        <br/><br/><font size=5><b>New User?</b></a></font></td>
    </tr>
  </table>
<p>&nbsp;</p>
</form>
</body>
</html>
