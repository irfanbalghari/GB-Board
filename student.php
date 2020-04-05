<html align="center" >
<head><title>Admition form</title>
<link rel= "stylesheet"
       type= "text/css"
       href= "form.css" />
       <script type= "text/javascript" src="student.js">
		   
		  //alert("hello pakistan");
		  
      </script>
</head>


<body>
<!--<form>
<input type="button" value="click on me" onClick="fun_pop()"/>
</form-->
<table>

<tr>
<td >
<img src="Web_elements/gbuni_logo.PNG" alt=" GB board logo " height= "144" width=100% > 

</tr>
 </table>
  <table id="tb">
<tr>  <td width="12%" id="t" ><a href="Homepage.php"/>Home</td>
<td width="17%" id="t" ><a href="photogallery.php"/>Photo Gallery</td>
<td width="18%" id="t"><a href="student.php"/>Online Form</td>
<td width="17%" id="t"><a href="courses.php"/>Courses</td>
<td width="17%" id="t" ><a href="downloads.php"/>Downloads</td>
 <td width="19%" id="t" ><a href="contactus.php"/>Contact Us </td></tr>
</table>
 <h2>Ananual examination 2017 </h2></td>
	 <form method="GET";  onsubmit="return validate();" >  <!-- action="ins_stud.php"-->                                                                                                                    
  <table style="width: 100%; align: center" border ="0" >
 <tr style=" background-color: darkgreen; font-size: 25; color: white;">
 <td style="width: 20%;"> Step-1 </td>
 <td style="width: 80%;"> Fill in all the Required Fields </td>
  </tr>
 <tr>
  <td style="width: 20%;"> Name </td>
<td style="width: 80%;"> <input type="text" name="sname" maxlength="30" id="sn" placeholder="Enter Student Name" /><span id="msn"; style="color: red;"></span></td>
</tr>
<tr>
<td style="width: 20%;"> Father Name </td>
<td style="width: 80%;"> <input type= "text" name="fname" maxlength="35" id="fn" placeholder = "Enter Father Name "/> <span id="mfn" style="color: red;"></span></td> 
</tr>
<tr>
 <td style="width: 20%;"> CNIC No. </td>
<td style="width: 80%;"> <input type="text" name="cnic" id="cnic"maxlength="15" placeholder="00000-0000000-0"/> <span id="mcnic" style="color: red;"></span></td>

</tr>
 
<tr>
<td style="width: 20%;">Date od Birth </td>
<td style= "width: 80%;"><input type= "text" name="DOB" id="dob" value="" placeholder=" DD-MM-YY " max-length="10"></td>
</tr>
<tr>
<td style="width: 20%;">Proposed Center</td>
<td style="width: 80%;"><input type= "text" name="pcenter" id ="pc" value=""max-length="50" placeholder="Enter Proposed Center"></td>
</tr>
<tr>
<td style="width: 20%;">Res.Address</td>
<td style= " width: 80%;"><input type= "text" name="resaddress"id= "ra" value="" placeholder="Enter the residential/postal Address"></td>
</tr>
<tr>
<td style="width: 20%;">Email.Id</td>
<td style="width: 80%;"><input type = "text" name="email"id="mail" value="" placeholder="Enter Email Address"> </td>
</tr>
<tr>
<td style= "width: 20%;">Mobile No.</td>
<td style= "width: 80%;"><input type="int" name="mobileno" id="mn" value="" placeholder="Enter Mobile Number"></td>
</tr> 
<tr>
<td style= "width: 20%;">Institution</td>
<td style= "width: 80%;"><!--input type="text" name="int" id="in" value="" placeholder="Enter institution"-->


<?php
require_once("conn.php");

$sql = "select * from institution";
$res= mysqli_query($conn, $sql);

?>
<select name="int" id ="inst" style=" width: 155; height: 30; font-weight: bold; ">
<option value="0">Select institution</option>

<?php
while($rows= mysqli_fetch_assoc($res))
	{
	echo "<option value='$rows[iid]'>$rows[iname]</option>";
	}

?>
</select>

</td>
</tr>   
<tr>
 <td style="width: 20%;"> Gender </td>
 <td style="width: 80%;"> <input type="radio" id="g" name="gender" value="Male"/>Male <input type="radio" id="g" name="gender" value="Female"/>Female </td>
 <span id="mg" style="color: red;"></span>
 </tr>
<table style="width: 100%;" border = "0">
<tr>
<td style="width: 20%;"></td>
<td style="width: 25%;">  
<input  type ="submit" Value ="Register" style=" width: 170; height: 50; font-weight: bold; "  >
 </td>
<td style="width: 55%;">
</td>
<br><br>
</tr>
</table>


<br><br>
</table>
<br>
</form>
<h2><p class="p" ><br><br><br>copyright © 2016 GB Board <br> All Rights Reserved</p></h2>
<br><br>
</body>
</html>
