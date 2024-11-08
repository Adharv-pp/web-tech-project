<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db1";
    
    $con = mysqli_connect($host, $username, $password, $dbname);
    
    if (!$con) {
        die("Connection failed!" . mysqli_connect_error());
    }

    // Collecting form data
    $std_reg_no = $_POST['std1_reg_no'];
    $std_name = $_POST['std1_name'];
    $std_course = $_POST['std1_course'];
    $std_marks = $_POST['std1_marks'];

    // Insert Operation
    if (isset($_POST['insert'])) {
        $sql_insert = "INSERT INTO `std1` (`std1_reg_no`, `std1_name`, `std1_course`, `std1_marks`) 
                       VALUES ('$std_reg_no', '$std_name', '$std_course', '$std_marks')";
        if (mysqli_query($con, $sql_insert)) {
            echo "<p>Entries inserted successfully!</p>";
        } else {
            echo "Error inserting entry: " . mysqli_error($con);
        }
    }

    // Update Operation
    if (isset($_POST['update'])) {
        $sql_update = "UPDATE `std1` SET `std1_marks`='$std_marks', `std1_name`='$std_name', `std1_course`='$std_course'
                       WHERE `std1_reg_no`='$std_reg_no'";
        if (mysqli_query($con, $sql_update)) {
            echo "<p>Entries updated successfully!</p>";
        } else {
            echo "Error updating entry: " . mysqli_error($con);
        }
    }

    // Delete Operation
    if (isset($_POST['delete'])) {
        $sql_delete = "DELETE FROM `std1` WHERE `std1_reg_no`='$std_reg_no'";
        if (mysqli_query($con, $sql_delete)) {
            echo "<p>Entries deleted successfully!</p>";
        } else {
            echo "Error deleting entry: " . mysqli_error($con);
        }
    }

    mysqli_close($con);
}
?>
