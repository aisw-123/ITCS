
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$FullName=$_POST['txtName'];
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	// Establish Connection with mysqli
	$con = mysqli_connect ("localhost","root");
	// Select Database
	mysqli_select_db($con,"itcs_user");
	// Specify the query to Insert Record
	$sql = "insert into user_table(NAME,USERNAME,PASSWORD) values('".$FullName."','".$UserName."','".$Password."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';

?>
</body>
</html>
