  <?php
$feesum = $_REQUEST['feesum'];
require_once("conn.php");
if(!$conn)
{
 die(" Connection Failed " . mysqli_connect_error($conn));
}
$ntc = "INSERT INTO feesummary (fee_summary) VALUES ('$feesum')"; 
mysqli_query($conn, $ntc);
header ("location: feeschedule.php");
?>
	 
	 
		