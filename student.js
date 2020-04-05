  function fun_pop()
{ 
	//confirm("Wellcome pakistan");	
	
		   
}
//alert("hello pakistan");
 function validate()
{
	var sname = document.getElementById("sn").value;
	if(sname=="")
		{
			document.getElementById("msn").innerHTML="Please enter name";
			return false;
		}
else {
document.getElementById("msn").innerHTML="";	}

	var fname=document.getElementById('fn').value;
	if(fname=="")
	{
		document.getElementById('mfn').innerHTML="Please enter father name";
		return false;
	}
	else
		document.getElementById('mfn').innerHTML="";


var cnicno = document.getElementById("cnic").value;
var dofno = document.getElementById("dob").value;
	if(cnicno=="" || dofno=="")
		{
			document.getElementById("mcnic").innerHTML="Please enter cnic & DOB ";
			return false;
		}
else 
{
document.getElementById("mcnic").innerHTML="";
		}

		
  var insti = document.getElementById("inst").value;
  
	if(insti=="0")
	{
	alert("Please select institution");
      return false;
	} 
	var gen = document.getElementsByName("gender").value;
		if(gen==""){
			document.getElementsByName("mg").innerHTML="please select gender";
			return false;
		}
		else{
			document.getElementByName("mg").innerHTML="";
		}
}