<?php
require_once("conn.php");
$i = $_REQUEST['id'];
$snam = $_REQUEST['sn'];
$fnam = $_REQUEST['fn'];
$cnic = $_REQUEST['cn'];
$gen = $_REQUEST['g'];
$dob = $_REQUEST['dob'];
$pcen = $_REQUEST['pc'];
$resa = $_REQUEST['ra'];
$eml = $_REQUEST['em'];
$mno = $_REQUEST['mn'];
$sql = "update tbl_student set sname='$snam', fname='$fnam',cnic='$cnic', gender='$gen',DOB='$dob',pcenter='$pcen',resaddress='$resa',email='$eml',mobileno='$mno' where st_id = $i";
$res= mysqli_query($conn, $sql);
header("location:myview.php");
exit();
 ?>
