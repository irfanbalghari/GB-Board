<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gbboard";
//$array= array(5)
//foreach($array as $subject){
	//echo "$subject\n";
//$array[] = $_REQUEST['subject'];
//}
	$subject1 = $_REQUEST['subject1'];
	$subject2 = $_REQUEST['subject2'];
$subject3 = $_REQUEST['subject3'];
$subject4 = $_REQUEST['subject4'];
$subject5 = $_REQUEST['subject5'];
$subject6 = $_REQUEST['subject6'];
//echo $subjt3;
//$studid= $_GET['st_id'];
//$studid=mysql_fetch_array('st_id');
//$dblink = mysqli_connect("localhost", "root", "", "gbboard") or die ("Error: Can't connect to the database..");
   // $studid=mysql_real_escape_string($_GET['st_id']);
   
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT st_id from tbl_student";
$result = $conn->query($sql);
$studid = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $studid = $row['st_id'];
    }
} else {
    echo "0 results";
}
echo $studid;


$sql = "INSERT INTO student_subject (studentid,subjectid)
VALUES ('$studid', '$subject1')"; 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully: subject";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO student_subject (studentid,subjectid)
VALUES ('$studid', '$subject2')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully: subject";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO student_subject (studentid,subjectid)
VALUES ('$studid', '$subject3')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully: subject";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO student_subject (studentid,subjectid)
VALUES ('$studid', '$subject4')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully: subject";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO student_subject (studentid,subjectid)
VALUES ('$studid', '$subject5')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully: subject";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO student_subject (studentid,subjectid)
VALUES ('$studid', '$subject6')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully: subject";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location: student.php");
exit();
?>