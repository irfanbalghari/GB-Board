<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gbboard";
   //if(isset($_REQUEST)){
$sname = $_REQUEST['sname'];
$fname = $_REQUEST['fname'];
$cnic = $_REQUEST['cnic'];

$DOB = $_REQUEST['DOB'];
$pcenter = $_REQUEST['pcenter'];
$res_address = $_REQUEST['resaddress'];
$mail = $_REQUEST['email'];
$mno = $_REQUEST['mobileno'];
$int = $_REQUEST['int'];
   $gender = $_REQUEST['gender'];
/*
echo("name is: " . $sname);
echo("f name is: " . $fname);
echo "cnic is $cnic";
echo "reg no  is $reg";
echo "gender no  is $gender";
echo "center  is $center";
*/

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sqlst= "INSERT INTO tbl_student (sname, fname, cnic, gender, DOB, pcenter, resaddress, email, mobileno, institution)
           VALUES ('$sname', '$fname', '$cnic', '$gender', '$DOB', '$pcenter', '$res_address', '$mail', '$mno', '$int')";   
if ($con->query($sqlst)===TRUE){
echo "New record created successfully";
}
else{
	echo " Error: " . $sqlst . "<br>" . $con->error;
}
header("location: subject.php");
exit();
?>
