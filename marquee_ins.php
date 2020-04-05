  <?php
$mr = $_REQUEST['marq'];
require_once("conn.php");
if(!$conn)
{
 die(" Connection Failed " . mysqli_connect_error($conn));
}
$mrqe = "INSERT INTO marquee (marquee) VALUES ('$mr')"; 
mysqli_query($conn, $mrqe);
header ("location: Homepage.php");
?>
	 
	 