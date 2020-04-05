<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gbboard";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "select * from institution";
$res= mysqli_query($conn, $sql);

?>
<select name="institution">
<option value="0">Select institutioin</option>

<?
while($rows= mysqli_fetch_assoc($res))
	{
	echo "<option value='$rows[iid]'>$rows[iname]</option>";
	}
   //$review->review_text .= "<a href='".$this->get_jumplink_for_review($review,1)."' target=\"_blank\">$show_morelink</a>";
?>
</select>
