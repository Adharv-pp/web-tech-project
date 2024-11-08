<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['email'])) {
    $email = htmlspecialchars($_GET['email']);
    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body { background-color: black; color: white; text-align: center; font-family: 'BBC Reith Sans', Arial, sans-serif; }
            h1 { color: white; }
            label { color: white; }
            button { background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px; border: none; cursor: pointer; margin-top: 20px; }
            button:hover { background-color: #45a049; }
            input[type='password'] { padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-top: 10px; }
        </style>
    </head>
    <body>
        <h1>Update Password for $email</h1>
        <form method='post' action='update_password.php'>
            <input type='hidden' name='email' value='$email'>
            <label for='password'>New Password:</label>
            <input type='password' id='password' name='password' required><br><br>
            <button type='submit' name='confirm_update'>CONFIRM UPDATE</button>
        </form>
    </body>
    </html>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm_update'])) {
    $email = $_POST['email'];
    $new_password = $_POST['password'];

    // Establish connection to the database
    $con = mysqli_connect("localhost", "root", "", "project abc");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Escape the user inputs to prevent SQL injection
    $login_email = mysqli_real_escape_string($con, $email);
    $new_password_safe = mysqli_real_escape_string($con, $new_password);

    // Fetch the current password from the database
    $sql_fetch = "SELECT `login_paswrd` FROM `login` WHERE `login_email` = '$login_email'";
    $result = mysqli_query($con, $sql_fetch);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $current_password = $row['login_paswrd'];
        
        // Check if the new password is the same as the current one
        if ($new_password_safe == $current_password) {
            echo "
            <!DOCTYPE html>
            <html>
            <head>
                <style>
                    body { background-color: black; color: white; text-align: center; font-family: 'BBC Reith Sans', Arial, sans-serif; }
                    h1 { color: white; }
                    p { color: white; }
                    button { background-color: #f44336; color: white; padding: 10px 20px; border-radius: 5px; border: none; cursor: pointer; margin-top: 20px; }
                    button:hover { background-color: #d32f2f; }
                </style>
            </head>
            <body>
                <h1>Error: The new password cannot be the same as the current password.</h1>
                <button onclick=\"window.history.back();\">Go Back</button>
            </body>
            </html>";
        } else {
            // Proceed to update the password if it is different
            $sql_update = "UPDATE `login` SET `login_paswrd` = '$new_password_safe' WHERE `login_email` = '$login_email'";
            if (mysqli_query($con, $sql_update)) {
                echo "
                <!DOCTYPE html>
                <html>
                <head>
                    <style>
                        body { background-color: black; color: white; text-align: center; font-family: 'BBC Reith Sans', Arial, sans-serif; }
                        h1 { color: white; }
                        p { color: white; }
                        button { background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px; border: none; cursor: pointer; margin-top: 20px; }
                        button:hover { background-color: #45a049; }
                    </style>
                </head>
                <body>
                    <h1>Password Updated Successfully</h1>
                    <button onclick=\"window.location.href='http://localhost/demo/HTML/CIA%20project%20BBC.php';\">Go to Homepage</button>
                </body>
                </html>";
            } else {
                echo "Error updating entry: " . mysqli_error($con);
            }
        }
    } else {
        echo "Error fetching current password.";
    }

    // Close the connection
    mysqli_close($con);
}
?>
