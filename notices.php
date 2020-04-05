<head>
<meta charset="utf-8">
<title>notices</title>
<link rel="stylesheet"
type= "text/css"
href= "irfanpage3.css"/>

</head>

<body>
<table >
<tr><td colspan="6"><img src="Web_elements/gbuni_logo.PNG" alt="Gilgilt Baltistan " 
width= "100%" height= "144"> </td></tr>
	<tr><td colspan="6">  <table id="tb">
<tr>  <td id="t" ><a href="Homepage.php"/>Home</td>
<td id="t" ><a href="academics.php"/>Academics</td>
<td id="t"><a href="student.php"/>Online Form</td>
<td id="t"><a href="courses.php"/>Courses</td>
<td id="t" ><a href="downloads.php"/>Downloads</td>
 <td id="t" ><a href="contactus.php"/>Contact Us </td></tr>
</table></td></tr>
	
	<tr><td colspan="6" >
	<div style= "background-color: #0E7176; float: left; width: 30%">
	<h2 class="headr">New Notices </h2>
       
   <?php 
require_once("conn.php");
$sql="select * from notices";
$result = $conn->query($sql);
//$rowid=0;

?>
<table border="0">
	<tr><td><h1>Latest Notices</h1></td>
	</tr>
	<?php 
		echo "<tr>"."<td>";
	while($row = $result->fetch_assoc())
//foreach($row as $row1) 
	{
      echo $row['notice']."<br>";
}
	echo "</td>"."</tr>";

	?>
	</table>             
		 
	</div>
		<!--form method="post" action="notices.php"><input type="text" name="notices" id="nt"/>
	  
            </form-->
	</td></tr>
	<tr>  <td colspan="6">	<!--<p class="p">Copyright © 2017 GB Board all rights reserved</p>-->
</td> </tr>
	
</table>
</body>