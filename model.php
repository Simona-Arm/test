<?php
$conn = mysqli_connect("localhost","root","","emp_task");
if(!$conn)die(mysqli_connect_error($conn));
function employee(){
    global $conn;
    $query = "SELECT employee.name,`surname`,task.name as `task_name`,`urgent`,`start_date`,`end_date`  FROM employee,task where employee.id = task.employee_id";
    $result = mysqli_query($conn,$query);
    return  mysqli_fetch_all($result,MYSQLI_ASSOC);
}
