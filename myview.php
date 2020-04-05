<?php
require_once("conn.php");
$sql="select * from tbl_student";
$result = $conn->query($sql);
$rowid=0;
?>
<a href="student.php">Add new record</a>
<table border="1">
	<tr><td>ID</td><td>Student_Name</td><td>Father_Name</td><td>CNIC</td><td>Gender</td> <td>DOB</td><td>Proposed Center</td><td>Res_Address</td><td>Email</td><td>Mobile No</td><td>Institution</td>
	</tr>
	<?php
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo"<td>".$row['st_id']."</td>";
		echo "<td>".$row['sname']."</td>";
		echo"<td>".$row['fname']."</td>";
		echo "<td>".$row['cnic']."</td>";
		echo"<td>".$row['gender']."</td>";
		echo "<td>".$row['DOB']."</td>";
		echo"<td>".$row['pcenter']."</td>";
		echo "<td>".$row['resaddress']."</td>";
		echo"<td>".$row['email']."</td>";
		echo "<td>".$row['mobileno']."</td>";
		
		echo "<td>".$row['institution']."</td>";
		echo "<td>";
			echo "<a href='edit.php?id=$row[st_id]'>Edit</a>";
		echo"</td>";
		echo"</tr>";
	}
	?>