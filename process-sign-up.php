

<?php
$con=mysqli_connect("localhost","root","","museumcatalogue");
    // If the values are posted, insert them into the database.
    if (isset($_POST['name']) && isset($_POST['password'])){
        $name = $_POST['name'];
		$email = $_POST['email'];
        $password = $_POST['password'];
	//check existence
	$sql="SELECT * FROM users WHERE email='$email'";
	$result=mysqli_query($con,$sql);

	// Mysql_num_row is counting table row
	$count=mysqli_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
	echo "User exists, please use log in.";
	exit;
	}
	else
	{
	//$jdate=getdate();
	//$status="Active";
	   $level="1";
        $query = "INSERT INTO `users` (name, password, email, level) VALUES ('$name', '$password', '$email',$level)";
        $result = mysqli_query($con,$query);
        if($result){
           //REDIRECT
		   header('location:success-sign-up.php');
exit;
        }
    }
	}
    ?>