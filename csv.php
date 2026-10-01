<?php 

include 'db.php';
header('Content-type:text/csv');
header("Content-disposition:attachment;filename=Emp.csv");
$output=fopen("php://output","w");
fputcsv($output,array('Emp ID','Emp Name','Department','Designation','Salary','Joining Date','Email'));
$result =  $conn->query('select * from employees');
while($row=$result->fetch_assoc()){
    fputcsv($output,$row);
}

?>  