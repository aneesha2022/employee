<?php
include_once("emp_db.php");
 
// Fetch records from database 
$query = mysqli_query($conn,"SELECT * FROM employee_details"); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "employee_details" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('EmpName', 'Email','Mobile','Location'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        $status = ($row['status'] == 1)?'Active':'Inactive'; 
        $lineData = array($row['empname'], $row['email'], $row['mobile'], $row['location'], $row['country'], $row['created'], $status); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>