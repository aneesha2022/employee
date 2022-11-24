<?php
include_once("emp_db.php");
$id=$_GET['edit'];
$sql1="select * from employee_details where id='$id'";
$res=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($res))
{
$name=$row1["empname"];
$email=$row1["email"];
$mobile=$row1["mobile"];
$location=$row1["location"];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Employee Details Edit Page</title>
</head>

<body bgcolor="orange">
<form id="form1" name="form1" method="post" action="emp_update.php" enctype="multipart/form-data">
<h1 style="font:'Times New Roman', Times, serif; color:#660033" >
    Edit form  </h1>

<label for= "textfield1"> Name </label> 
<input type="text" name="textfield1" value= "<?php echo $name;?>" /> <br /> <br /><br />
<label for= "textfield2"> Email </label> 
<input type="text" name="textfield2" value= "<?php echo $email;?>" /> <br /> <br /><br />
<label for= "textfield3"> MobileNo </label> 
<input type="text" name="textfield3" value= "<?php echo $mobile;?>" /> <br /> <br /><br />
<label for= "textfield4"> Location </label> 
<input type="text" name="textfield4" value= "<?php echo $location;?>" /> <br /> <br /><br />
 <input type="hidden" name="textfield5" value= "<?php echo $id;?>" />
<br />
<br />
<input type="submit" name="Submit" value="submit"  />
</form>
</body>
</html>
