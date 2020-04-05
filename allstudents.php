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
 
</table></td></tr>
<tr><td colspan="6">	     
<?php
require_once("conn.php");
$sql="select * from tbl_student";
$result = $conn->query($sql);
$rowid=0;
?>

<table border="1" class="text"; style="color:mediumspringgreen;">
	<tr class="headr"><td>ID</td><td>Student_Name</td><td>Father_Name</td><<td>Gender</td> <td>DOB</td><td>Proposed Center</td><td>Res_Address</td>
	</tr>
	<?php
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo"<td>".$row['st_id']."</td>";
		echo "<td>".$row['sname']."</td>";
		echo"<td>".$row['fname']."</td>";
		
		echo"<td>".$row['gender']."</td>";
		echo "<td>".$row['DOB']."</td>";
		echo"<td>".$row['pcenter']."</td>";
		echo "<td>".$row['resaddress']."</td>";
		
		
		
		echo"</tr>";
	}
	?>
  
      </td></tr>
<tr><td colspan="6"><p class="p">Copyright© 2017 GB Board all rights reserved</p> </td></tr>
</table>
</body>

</html>