<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$empid = $_POST['empid'];
$empname = $_POST['empname'];
$empdob = $_POST['empdob'];
$empdesignation = $_POST['empdesignation'];
$empdoj = $_POST['empdoj'];
$action = $_POST['action'];

if ($action == "Submit") 
{
    $sql = "INSERT INTO employee (emp_id, emp_name, emp_dob, emp_designation, emp_doj) 
            VALUES ('$empid', '$empname', '$empdob', '$empdesignation', '$empdoj')";
    
    if ($conn->query($sql) === TRUE) 
    {
        echo "Employee record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif ($action == "Update") 
{
    $sql = "UPDATE employee SET emp_name='$empname', emp_dob='$empdob', emp_designation='$empdesignation', emp_doj='$empdoj' 
            WHERE emp_id='$empid'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Employee record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif ($action == "Delete") 
{
    $sql = "DELETE FROM employee WHERE emp_id='$empid'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Employee record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
