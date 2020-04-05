<?php
$cr = $_POST['cours'];

require_once("conn.php");
if(!$conn)
{
 die(" Connection Failed " . mysqli_connect_error($conn));
}
$c = "INSERT INTO courses (course) VALUES ('$cr')"; 
mysqli_query($conn, $c);



header("location:courses.php");
exit();
?>