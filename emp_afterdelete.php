<?php
include_once("emp_db.php");
$limit = 2;  
if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	};  
$start_from = ($page-1) * $limit;  
$result = mysqli_query($conn,"SELECT * FROM employee_details ORDER BY id ASC LIMIT $start_from, $limit");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>View Details after deletion</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="emp_download.php" enctype="multipart/form-data">
<table width="500" border="1">
  <tr>
    <td>S.No</td>
	<td>Name</td>
    <td>Email</td>
    <td>MobileNo</td>
	<td>Location</td>
	
  </tr>
  <?php 
  $counter=0; 
   while($row=mysqli_fetch_array($result))
   {
  ?>
  <tr>
    <td><?php echo ++$counter;?></td>
    <td><?php echo $row['empname'];?></td>
    <td><?php echo $row['email'];?></td>
	 <td><?php echo $row['mobile'];?></td>
	 <td><?php echo $row['location'];?></td>

  </tr>
  
  <?php } ?>
  
</table>
<input type="submit" name="Submit" value="Download"  />
<form>
<?php  

$result = mysqli_query($conn,"SELECT COUNT(id) FROM employee_details"); 
$row1 = mysqli_fetch_row($result);  
$total_records = $row1[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item'><a class='page-link' href='emp_afterdelete.php?page=".$i."'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  
?>

</body>
</html>