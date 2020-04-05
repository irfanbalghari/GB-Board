<head>
<meta charset="utf-8">
<title>GB-Admin</title>
<link rel="stylesheet"
type= "text/css"
href= "irfanpage3.css"/>

</head>

<body>
<table height="683" >
<tr><td colspan="6"><img src="Web_elements/newgb.PNG" alt="Gilgilt Baltistan " 
width= "100%" height= "144"> </td></tr>
	<tr><td colspan="6">  <table id="tb">
<tr>  <td width="12%" id="t" ><a href="Homepage.php"/>Home</td>
<td width="17%" id="t" ><a href="photogallery.php"/>Photo Gallery</td>
<td width="18%" id="t"><a href="student.php"/>Online Form</td>
<td width="17%" id="t"><a href="courses.php"/>Courses</td>
<td width="17%" id="t" ><a href="downloads.php"/>Downloads</td>
 <td width="19%" id="t" ><a href="contactus.php"/>Contact Us </td></tr>
</table></td></tr>
	
	<tr><td height="402" colspan="6" >
	
	<div style= "background-color: #0E7176; float: left; width: 45%">
	<h2 class="headr">GB Board Admin Pannel </h2>
	<table>	<tr><br><br>
		<form method="post" action = "search.php">
name: <input type="text" name="sr" /> 
      <input type="submit" name="sb" value="search" />
		</form></table>
	
	     <ul>
	     	<li><a href="student.php">Registration Form </a></li>
	     	<li><a href="subject.php">Select Subjects</a></li>
	     	<li><a href="myview.php">Overall view</a></li>
	     	<li><a href="edit.php">Edit Student Table</a></li>
	     	<button><a href="Homepage.php">Back to home</a></button>
	     	<button><a href="logout.php">Logout</a></button>
	     </ul>
	     
	     </div>
	     
	     </div>
	     
		<div style="background-color: #0E7176; float: right; width: 50%; padding: 25px;">
		 <h2 class="headr">Add New Notifications</h2> 
		 
		 <form method="post" action="admin_notice.php">
		 <textarea type="text" name="notices" id="nt" value="" placeholder="----Add new notices----" style="background-color:                                                       lightblue; font-size: 16;width: 256; height: 144;"></textarea>
		 <input type="submit" name="submit" value="submit" onclick="gbadmin.php"/>
		</form>
		
		<!--h1 class="headr">Upload Documents</h1>--> 
	  <div id="header">
<label>File Uploading </label>
</div>
		  <form method="post" action="uploadfile.php" enctype="multipart/form-data">
		 <input type="file" name="file" id="doc" style="background-color: lightblue; font-size: 16;"/>
		 <input type="submit" name="submit" value="submit" />
		<!--<input type="file" name="file" id="doc" style="background-color: lightblue; font-size: 16;"/>
	<button type="submit" name="btn-upload">upload</button>-->
		 </form>
		 
    <h1 class="headr">Fee Schedule</h1>
	<form method="post" action="admin_feeschedule.php">
		 <textarea type="text" name="feesche" id="fc" value="" placeholder="fee schedule" style="background-color:                                                       lightblue; font-size: 16;width: 256; height: 144;"></textarea>
		 <input type="submit" name="submit" value="submit" />
		
		 </form> 
		 
		 <h1 class="headr">Fee Summary</h1>
	<form method="post" action="admin_feesummary.php">
		 <textarea type="text" name="feesum" id="fm" value="" placeholder="fee summary" style="background-color:                                                       lightblue; font-size: 16;width: 256; height: 144;"></textarea>
		 <input type="submit" name="submit" value="submit" />
		
		 </form> 
		   <h1 class="headr">Examination Schedule</h1>
	<form method="post" action="admin_exam.php">
		 <textarea type="text" name="examsche" id="fc" value="" placeholder="exam schedule" style="background-color:                                                       lightblue; font-size: 16;width: 256; height: 144;"></textarea>
		 <input type="submit" name="submit" value="submit" />
		
		 </form> 
		</div>
		<!--<div >
	Adding New Notifiacations: <input type="text" name="nt" id="n" />
		  </div>-->
		
  </td></tr> </div>
	<tr>  <td colspan="6"><p class="p">Copyright© 2017 GB Board all rights reserved</p>
	
	</td> </tr>
	
</table>

</body>