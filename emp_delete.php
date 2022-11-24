<?php
include_once("emp_db.php");
$cheks = implode("','", $_POST['empids']);
$sql = "delete from employee_details where id in ('$cheks')";
mysqli_query($conn,$sql);
header("location:emp_afterdelete.php");
?>