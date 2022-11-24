<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Employee Registration Form</title>

<script type="text/javascript">
function emp()
{ 
document.getElementById('b1').focus();
}

</script>
<style>
table {
  border-collapse: collapse;
  border-radius=50%;
}
</style>
</head>

<body bgcolor="#0FFFFF" onload='emp()'>
<form id="form1" name="form1" method="post" action="emp_insert.php" enctype="multipart/form-data">
<center>
<table style width="40%" border="5px" summary="register">
<h1 style="font:'Times New Roman', Times, serif; color:#660033" >Registration form  </h1>
<tr>
<td><label for= "textfield1"> Name </label> </td>
<td><input type="text" name="textfield1" id="b1" placeholder="Enter Name" style="height:50px;width:380px"  required /> <br /> <br /><br /></td>
</tr>
<tr>
<td><label for= "textfield2"> Email </label></td>
<td><input type="text" name="textfield2" placeholder="Enter Email" size="50" style="height:50px"required /> <br /> <br /><br />
 </td>
 </tr>
 <tr>
<td><label for= "textfield3"> Mobile Number </label></td>
<td><input type="text" name="textfield3" placeholder="Enter Mobile Number" size="50"style="height:50px"  required /> <br /> <br /><br />
 </td>
 </tr><tr>
<td><label for= "textfield4"> Location </label></td>
<td><input type="text" name="textfield4" placeholder="Enter Location" size="50"style="height:50px"  required /> <br /> <br /><br />
 </td>
 </tr>
</tr>
</table>
<center>
</form><br><br><br>

  <button type="submit" name="Submit" value="submit" style="height:40px;width:100px;border-radius:50px">Submit</button>

</body>
</html>
