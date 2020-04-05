<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gbboard";
   //if(isset($_REQUEST)){
$sname = $_REQUEST['sname'];
$fname = $_REQUEST['fname'];
$cnic = $_REQUEST['cnic'];
$reg = $_REQUEST['reg'];
$gender = $_REQUEST['gender'];
$DOB = $_REQUEST['DOB'];
$pcenter = $_REQUEST['pcenter'];
$res_address = $_REQUEST['resaddress'];
$mail = $_REQUEST['email'];
$mno = $_REQUEST['mobileno'];
$area = $_REQUEST['area'];
$religion = $_REQUEST['religion'];
$nationality = $_REQUEST['nationality'];
   
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
$sqlgb= "INSERT INTO admision (sname, fname, cnic, reg, gender, DOB, pcenter, resaddress, email, mobileno, area, religion, nationality)
VALUES                        ('$sname', '$fname', '$cnic', '$reg', '$gender', '$DOB', '$res_address', '$pcenter', '$mail', '$mno', '$area', '$religion', '$nationality')";   
if ($con->query($sqlgb)===TRUE){
echo "New record created successfully";
}
else{
	echo " Error: " . $sqlgb . "<br>" . $con->error;
}
?>
