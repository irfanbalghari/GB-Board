 function svalidate()
{
	var su1 = document.getElementById("sub1").value;
	if(su1=="")
		{
			document.getElementById("s1").innerHTML="Please select this subject";
			return false;
		}
else {
document.getElementById("s1").innerHTML="";	}

	var su2=document.getElementById('sub2').value;
	if(su2=="")
	{
		document.getElementById('s2').innerHTML="Please select second subject";
		return false;
	}
	else
		document.getElementById('s2').innerHTML="";
	
	var su3 = document.getElementById("sub3").value;
	if(su3=="")
		{
			document.getElementById("s3").innerHTML="Please select this subject";
			return false;
		}
else {
document.getElementById("s3").innerHTML="";	}

	var su4=document.getElementById('sub4').value;
	if(su4=="")
	{
		document.getElementById('s4').innerHTML="Please select subject";
		return false;
	}
	else
		document.getElementById('s4').innerHTML="";

	var su5 = document.getElementById("sub5").value;
	if(su5=="")
		{
			document.getElementById("s5").innerHTML="Please select this subject";
			return false;
		}
else {
document.getElementById("s5").innerHTML="";	}

	var su6=document.getElementById('sub6').value;
	if(su6=="")
	{
		document.getElementById('s6').innerHTML="Please select  subject";
		return false;
	}
	else
		document.getElementById('s6').innerHTML="";
}
	