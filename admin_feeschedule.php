 <?php
$feesche = $_POST['feesche'];
require_once("conn.php");
if(!$conn)
{
 die(" Connection Failed " . mysqli_connect_error($conn));
}
$ntc = "INSERT INTO feeschedule (fee_schedule) VALUES ('$feesche')"; 
mysqli_query($conn, $ntc);
header ("location: feeschedule.php");
?>
	 
	 