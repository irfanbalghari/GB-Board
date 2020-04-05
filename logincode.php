<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gbboard";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$uname = $_POST['username'];
$pass = $_POST['password'];
$sql = "select * from session where username='$uname' && password='$pass'";
$res= mysqli_query($conn, $sql);
$num = mysqli_num_rows($res);
if($num>0)
	{
		$_SESSION['username']= $uname;
		header("location:gbadmin.php");
		exit();
	}
else
{
		header("location:login.php");
		exit();
}






?>
</table>