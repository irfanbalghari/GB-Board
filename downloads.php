<html>
<head>
<meta charset="utf-8">
<title>Downloads</title>
<link rel="stylesheet"
type= "text/css"
href= "irfanpage3.css"/>

</head>

<body>
<table >
<tr><td colspan="6"><img src="Web_elements/newgb.PNG" alt="Gilgilt Baltistan " 
width= "100%" height= "144"> </td></tr>
	<tr><td colspan="6">  <table id="tb">
<tr>  <td id="t" ><a href="Homepage.php"/>Home</td>
<td id="t" ><a href="photogallery.php"/>Photo Gallery</td>
<td id="t"><a href="student.php"/>Online Form</td>
<td id="t"><a href="courses.php"/>Courses</td>
<td id="t" ><a href="downloads.php"/>Downloads</td>
 <td id="t" ><a href="contactus.php"/>Contact Us </td></tr>
</table></td></tr>
	</table>
	
	
<div style= "background-color: #0E7176; float: left; width: 45%">
	
	
	<?php 
require_once("conn.php");
$sql="select * from documents";
$result = $conn->query($sql);


?>
<table border="0">
	<tr><td height="56"><h1 class="headr">Documents </h1></td>
	<td><h1 class="headr">view</h1></td>
	</tr>
	<tr><td height="60">
	<?php
		//echo "<tr>"."<td>";
	while($row = $result->fetch_assoc())

	{
      echo "<img src=".$row['document1']." width='200'/>"."<br>";
		echo $row['type']."<br>";
		echo $row['size']."<br>";
		//echo "<a href=".$row['document1']."target='_blank'>".'view file'."</a>";
	
		//echo "</td>";
		$a='view file';
		echo "<td>"."<a href='".$row['document1']."'target=\"_blank\">$a</a>";
			//echo"</td>"."</tr>";
		
}
?>	
</td><td></td>
</tr>
</table>
  </div>
	<div style="background-color: #0E7176; float: right; width: 50%; padding: 25px;">
		
		  <p class="headr"> Affidavit For PM-Laptop Scheme</p>    
         <a href= "Web_elements/affidavit.pdf" download>                                 
		 <input type="button" name="submit" id="submit" value="Download" style="background-color: lightblue; font-size: 16; width: 150; height: 60;"/>
	</a>
		<h4>..</h4>                                   
		 <p>............................. </p></br><br></br></div>
	
<p class="p">Copyright© 2017 GB Board all rights reserved</p>

</body>

</html>