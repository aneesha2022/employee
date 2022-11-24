<?php
include_once("emp_db.php");
$id=$_REQUEST["textfield5"];
$name=$_POST["textfield1"];
$n2=$_POST["textfield2"];
$n3=$_POST["textfield3"];
$n4=$_POST["textfield4"];

$sql="update employee_details set empname='$name', email='$n2',mobile='$n3',location='$n4' where id='$id'";
mysqli_query($conn,$sql);
header("location:emp_view.php");
?>