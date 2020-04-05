<html align="center" >
<head><title>Admition form</title>
<link rel= "stylesheet"
       type= "text/css"
       href= "form.css" />
</head>


<body>
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
<td >
<img src="Web_elements/gbuni_logo.PNG" alt=" GB board logo " height= "144" width=100% > 
<br>
<h2>admin form</h2></td>
<h2>Ananual examination 2017 </h2></td>
</tr>
 

</table>
	
 <form method="GET" action="addmissionform.php" >                                                                                                                       
  <table style="width: 100%; align: center" border ="0" >
 <tr style=" background-color: darkgreen; font-size: 25; color: white;">
 <td style="width: 20%;"> Step-1 </td>
 <td style="width: 80%;"> Fill in all the Required Fields </td>
  </tr>
 <tr>
  <td style="width: 20%;"> Name </td>
<td style="width: 80%;"> <input type="text" name="sname" maxlength="30" id="stud_name" placeholder="Enter Student Name" </td>
</tr>
<tr>
<td style="width: 20%;"> Father Name </td>
<td style="width: 80%;"> <input type= "text" name="fname" maxlength="35" id="f_name" placeholder = "Enter Father Name " </td> 
</tr>
<tr>
 <td style="width: 20%;"> CNIC No. </td>
<td style="width: 80%;"> <input type="text" name="cnic" id="cnic"maxlength="15" placeholder="00000-0000000-0"> </td>
</tr>
<tr>
 <td style="width: 20%;"> Regn. No. </td>
 <td style="width: 80%;"> <input type="text" name="reg" id="regno" maxlength="10" placeholder="If already registered"> </td>
 </tr>
 <tr>
 <td style="width: 20%;"> Gender </td>
 <td style="width: 80%;"> <input type="radio" id="gender" name="gender" value="Male">Male <input type="radio" id="gender" name="gender" value="Female">Female </td>
 </tr>
<tr>
<td style="width: 20%;">Date od Birth </td>
<td style= "width: 80%;"><input type= "text" name="DOB" id="DOB" value="" placeholder=" DD-MM-YY " max-length="10"></td>
</tr>
<tr>
<td style="width: 20%;">Proposed Center</td>
<td style="width: 80%;"><input type= "text" name="pcenter" id ="pos_center" value=""max-length="50" placeholder="Enter Proposed Center"></td>
</tr>
<tr>
<td style="width: 20%;">Res.Address</td>
<td style= " width: 80%;"><input type= "text" name="resaddress"id= "res_addres" value="" placeholder="Enter the residential/postal Address"></td>
</tr>
<tr>
<td style="width: 20%;">Email.Id</td>
<td style="width: 80%;"><input type = "text" name="email"id="mail" value="" placeholder="Enter Email Address"> </td>
</tr>
<tr>
<td style= "width: 20%;">Mobile No.</td>
<td style= "width: 80%;"><input type="text" name="mobileno" id="mobile_no" value="" placeholder="Enter Mobile Number"></td>
</tr>
<tr>
<td style="width: 20%;">Area</td>
<td style= "width: 80%;"> <select name= "area" id="city">
                           <option  value="">-----Select Your Area-----</option>
                           <option value= "isl"> Islamabad</option>  
                          <option value= "rwl"> Rawalpindi</option>
                          <option value= "hyd"> Hyderabad</option> 
                          <option value= "kra"> Karachi</option>
                          <option value= "bal"> Balghar</option>
                           </select>
   <tr>
<td style="width: 20%;">Religion</td>
<td style="width: 80%;">  Muslim<input type= "radio" name ="religion" id="religion" value="Muslim" >
                          NoN-Muslim<input type= "radio" name ="religion" id="religion" value="NoN-Muslim" ></td>
</tr>    
   <tr>
<td style="width: 20%;">Nationality</td>
<td style="width: 80%;">  Pakistani<input type= "radio" name ="nationality" id="country" value="Pakistani" >
                          NoN-Pakistani<input type= "radio" name ="nationality" id="country" value="NoN-Pakistani" ></td>
</tr>    

<table style="width: 100%;" border = "0">
<tr>
<td style="width: 20%;"></td>
<td style="width: 25%;">  
<input type="submit" name="submit" id="sub" value="Register" style=" width: 170; height: 50; font-weight: bold; "  >
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
<h2> Select subjects By Clicking on SUBJECTS</h2>
<a href="selectsubjects.php">
<input type="button" name="subject" id="subject" value="SELECT SUBJECTS" style=" width: 170; height: 50; font-weight: bold;" onclick="">
 </a>
 <h2><strong ><br><br><br>copyright © 2016 GB Board <br> All Rights Reserved</strong></h2>
<br><br>
</body>
</html>
