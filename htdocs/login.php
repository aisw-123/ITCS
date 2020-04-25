
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$UserName=$_POST['txtUser'];
$Password=$_POST['txtPass'];
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"itcs_user");
$sql = "select * from user_table where USERNAME='".$UserName."' and PASSWORD='".$Password."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result,MYSQLI_BOTH);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
header("location:login/index.php");
} 
mysqli_close($con);

?>

</body>
</html>
