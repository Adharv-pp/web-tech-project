<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['email'])) {
    $email = $_GET['email'];

    $con = mysqli_connect("localhost", "root", "", "project abc");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $login_email = mysqli_real_escape_string($con, $email);

    $sql_delete = "DELETE FROM `login` WHERE `login_email`='$login_email'";
    
    if (mysqli_query($con, $sql_delete)) {
        echo "
        <!DOCTYPE html>
        <html>
        <head>
            <style>
                body { background-color: black; color: white; text-align: center; }
                h1 { color: white; }
                button { background-color: #354035; color: white; padding: 10px 20px; border-radius: 5px; cursor: pointer; }
            </style>
        </head>
        <body>
            <h1>Account Deleted Successfully</h1>
            <button onclick=\"window.location.href='login.html';\">Go to Homepage</button>
        </body>
        </html>";
    } else {
        echo "Error deleting entry: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
