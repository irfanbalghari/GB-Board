 <?php
$examsche = $_POST['examsche'];
require_once("conn.php");
if(!$conn)
{
 die(" Connection Failed " . mysqli_connect_error($conn));
}
$ntc = "INSERT INTO examschedule (exam_schedule) VALUES ('$examsche')"; 
mysqli_query($conn, $ntc);
header ("location: examschedule.php");
?>