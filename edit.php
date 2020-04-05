<?php
require_once("conn.php");
$id =$_REQUEST['id'];
$sql = "select * from tbl_student where st_id=$id";
$res= mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res)
?>

<table>
<form method="post" action = "update.php">
  <tr><td>ID</td><td><input type="text" name="id" value ="<?=$row['st_id']?>"/></td></tr>
		<tr><td>Student Name:</td><td><input type="text" name="sn" value ="<?=$row['sname']?>" /></td></tr>
        <tr><td> Father Name:</td><td><input type="text" name="fn" value ="<?=$row['fname']?>"/></td></tr>
		<tr><td>CNIC:</td><td><input type="text" name="cn" value ="<?=$row['cnic']?>"/></td></tr>
		<tr><td>Gender:</td><td>
  Female<input type="radio" name="g" value ="female" <? if($row['gender']=='female') echo 'checked'; ?> /> 
	male<input type="radio" name="g" value ="male" <? if($row['gender']=='male') echo 'checked'; ?>/></td></tr>
		<tr><td>DOB: </td><td><input type="text" name="dob" value ="<?=$row['DOB']?>" /></td></tr>
		<tr><td>Proposed Center:</td><td><input type="text" name="pc" value ="<?=$row['pcenter']?>"/></td></tr>
		<tr><td>Res_Address:</td><td><input type="text" name="ra" value ="<?=$row['resaddress']?>" /></td></tr>
		<tr><td> Email:</td><td><input type="text" name="em" value ="<?=$row['email']?>"/></td></tr>
		<tr><td>Mobile_No:</td><td><input type="text" name="mn" value ="<?=$row['mobileno']?>" /></td></tr>
		<tr><td>submit button:</td><td><input type="submit" name="sb" value="Update" /> <br></td></tr>
		
</form>	

</table>
