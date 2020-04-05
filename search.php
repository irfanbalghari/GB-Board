<html>
<head>
<meta charset="utf-8">
<title>Downloads</title>
<link rel="stylesheet"
type= "text/css"
href= "irfanpage3.css"/>

</head>

<body >
<table >
<tr><td colspan="6"><img src="Web_elements/newgb.PNG" alt="Gilgilt Baltistan " 
width= "100%" height= "144"> </td></tr>
<tr><td colspan="6"> </td></tr>
	<tr><td colspan="6"> <form method="post" action = "search.php">
<p class="headr">Search Student: </p> <input type="text" name="sr" /> 
      <input type="submit" name="sb" value="search" />
	</form> <table id="tb">
<tr>  <td id="t" ><a href="Homepage.php"/>Home</td>
<td id="t" ><a href="photogallery.php"/>Photo Gallery</td>
<td id="t"><a href="student.php"/>Online Form</td>
<td id="t"><a href="courses.php"/>Courses</td>
<td id="t" ><a href="downloads.php"/>Downloads</td>
 <td id="t" ><a href="contactus.php"/>Contact Us </td></tr>
 
		</table></td></tr></table>
		<table border="1" class="text">
	<tr class="headr">
		<td>ID</td><td>Student_Name</td><td>Father_Name</td><td>CNIC</td><td>Gender</td> <td>DOB</td><td>Proposed Center</td><td>Res_Address</td><td>Email</td><td>Mobile No</td><td>Institution</td>
	</tr>
<?php

$servername = "localhost";
$username ="root";  
$password = "";
$dbname = "gbboard";
$conn = mysqli_connect($servername, $username, $password, $dbname);
//$sql = "select * from tbl_student  where name like '%$s%' ";
//$row1=m;
//require_once("conn.php");
//$sql="select * from tbl_student";
echo $s = $_REQUEST['sr'];

$sql = "select * from tbl_student where sname like'%$s%'";
$res = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res))
	{
			echo "<tr>";
		echo "<td>".$row['st_id']."</td>";
		echo "<td>".$row['sname']."</td>";
		echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['cnic']."</td>";
		echo "<td>".$row['gender']."</td>";
		echo "<td>".$row['DOB']."</td>";
		echo "<td>".$row['pcenter']."</td>";
		echo "<td>".$row['resaddress']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mobileno']."</td>";
		echo "<td>".$row['institution']."</td>";
		
		//echo "<td>";
			//echo("<a href='edit.php?id=$row[id]'>Edit</a>"."</td>");
		echo"</tr>";
	}
	?>
</table>


</body>

</html>