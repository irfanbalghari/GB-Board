<html align="center" >
<head><title>Admition form</title>
<link rel= "stylesheet"
       type= "text/css"
       href= "form.css" />
</head>


<body class="body">
  <table id="tb">
<tr>  <td id="t" ><a href="Homepage.php"/>Home</td>
<td id="t" ><a href="academics.php"/>Academics</td>
<td id="t"><a href="Form.php"/>Online Form</td>
<td id="t"><a href="courses.php"/>Courses</td>
<td id="t" ><a href="downloads.php"/>Downloads</td>
 <td id="t" ><a href="contactus.php"/>Contact Us </td></tr>
</table>

<table>

<tr>
<td style="width: 100%; align: center;background-color:darkcyan;">
<img src="Web_elements/gbuni_logo.PNG" alt=" GB board logo " height= "144" width=100% > 
<br>

<h2>Ananual examination 2017 </h2></td>
</tr>
 

</table>
	
 <form method="get" action="subjects.php"  >                                                                                                                       
  <table style="width: 100%; align: center" border ="0" >
 <tr style=" background-color: darkgreen; font-size: 25; color: white;">
 <td style="width: 20%;"> Choose</td>
 <td style="width: 80%;"> Compulsory Subjects </td>
  </tr>
<table style="width: 100%;" border = "0">
<tr>
<td style="width: 20%;"></td>
<td style="width: 25%;">
                            1. <select name="subject1" id="sub1" style="width: 250">
                           <option value="">--select subject--</option>                           
						   <option value="ENG-I" >English compulsory-I</option>
                             <option value="english compulsory">Enlish Compulsory</option>
                             <option value="english-self">Enlish-Self</option>
                              </select>   
</td>
<td style= "width: 55%;"> 2. <select name="subject2" id="sub2" style="width: 250">
                         <option value="">--select subject--</option>                           
						   <option value="URDU-I" >Urdu compulsory-I</option>
                             <option value="urdu compulsory">Urdu Compulsory</option>
                             <option value="urdu-self">Urdu-Self</option>
                              </select>
</td>
</tr> 
<tr> 
<td style="width: 20%;"></td>
<td style="width: 25%;"> 3. <select name="subject3" id="sub3" style="width: 250" >
                            <option value="">--select subject--</option>
							<option value="ISL-COMP">Islamiat</option>
                             <option value="Islamiat I">Islamiat-I</option>
                             <option value="Islamiat-II">Islamiat-II</option>
                              </select>  
 </td>
<td style= "width: 55%;"> 4. <select name="subject4" id="sub4"style="width: 250">
                            <option value="">--select subject--</option>
							<option value="MEDICAL" >Biology</option>
                             <option value="Mathematics-1">Mathematics-1</option>
                             <option value="Mathematics-2">Mathematics-2</option>
                              </select>
</td>
 </tr>  
<tr> 
<td style="width: 20%;"></td>
<td style="width: 25%;"> 5. <select name="subject5" id="sub5" style="width: 250" >
                            <option value="">--select subject--</option>
                             <option value="society">society</option>
                             <option value="social science">social science</option>
                              </select>  
 </td>
<td style= "width: 55%;"> 6. <select name="subject6" id="sub6"style="width: 250">
                            <option value="" >--select subject-- </option>
                             <option value="arabic">Arabic</option>
                             <option value="physics">Physics</option>
                              <option value="chemistry">chemistry</option>
							  </select>
</td>
 </tr>  

<br>
<tr>
<td style="width: 20%;"></td>
<td style="width: 25%;"> <!-- Student Pastport <br>size picture here <br><br> <img src="Web_elements/noimage.jpg" width="170px" height="200px"-->
<br><br>
<input type="submit" name="sub" id="sub" value="Register" style=" width: 170; height: 50; font-weight: bold; "  >
 </td>
<td style="width: 55%;">
</td>
<h2> Back to Admin Pannel</h2>
<a href="gbadmin.php">
<input type="button" name="subject" id="subject" value="SELECT " style=" width: 170; height: 50; font-weight: bold;" onclick="">
 </a>
<br><br>
</tr>
</table>


<br><br>
</table>
<br>
</form>
 <h2><strong >copyright © 2016 GB Board <br> All Rights Reserved</strong></h2>
<br><br>
</body>
</html>
