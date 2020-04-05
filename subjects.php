<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gbboard";
$subject1 = $_REQUEST['subject1'];
$subject2 = $_REQUEST['subject2'];
$subject3 = $_REQUEST['subject3'];
$subject4 = $_REQUEST['subject4'];
$subject5 = $_REQUEST['subject5'];
$subject6 = $_REQUEST['subject6'];
//echo $subjt3;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO subjects (subject1,subject2,subject3,subject4,subject5,subject6) 
VALUES ('$subject1','$subject2','$subject3','$subject4','$subject5','$subject6')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>