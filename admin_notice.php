<?php
$notice = $_POST['notices'];

$f = ($_FILES['document1']['name']);
$e = pathinfo($f);
$ext = $e['extension'];
$r = rand();
$fi = $r;
move_uploaded_file($_FILES['document1']['tmp_name'], $fi);

require_once("conn.php");
if(!$conn)
{
 die(" Connection Failed " . mysqli_connect_error($conn));
}
$ntc = "INSERT INTO notices (notice) VALUES ('$notice')"; 
mysqli_query($conn, $ntc);




$sql = "INSERT INTO documents(document1)
VALUES ('$f')";

mysqli_query($conn, $sql);

header("location:downloads.php");
exit();
?>