<?php
include_once("emp_db.php");
$n1=strtoupper($_POST["textfield1"]);
$n2=trim($_POST["textfield2"]);
$n3=trim($_POST["textfield3"]);
$n4=trim($_POST["textfield4"]);


$sql="insert into employee_details(empname,email,mobile,location)values('$n1','$n2','$n3','$n4')";
$n5 = mysqli_query($conn,$sql);
if($n5)
{
header("Location:emp_registration.php?msg=Insert Sucessfully...");
}
else
{
echo"Not inserted";
}
?>
