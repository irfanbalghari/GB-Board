<?php
//include_once 'conn.php';
$f = ($_FILES['file']['name']);
$file=rand().$f;

$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
require_once("conn.php");

//$e = pathinfo($f);
//$ext = $e['extension'];
//$r = rand();
//$fi = $r;
//$file = rand(1000,100000)."-".$_FILES['file']['name'];
   //$file_loc = $_FILES['file']['tmp_name'];
	//$file_size = $_FILES['file']['size'];
	//$file_type = $_FILES['file']['type'];
	//$folder="uploads/";
move_uploaded_file($_FILES['file']['tmp_name'], $file);

if(!$conn)
{
 die(" Connection Failed " . mysqli_connect_error($conn));
}
$sql = "INSERT INTO documents(document1,size,type)
VALUES ('$file','$file_size','$file_type')";

mysqli_query($conn, $sql);

header("location:downloads.php");
exit();
?>