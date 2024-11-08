<?php
$host = "localhost";
$username = "root";
$password_db = "";
$dbname = "project abc";

$con = mysqli_connect($host, $username, $password_db, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $new_password = htmlspecialchars($_POST['new_password']);

    if (!empty($new_password)) {
        $hashed_password = mysqli_real_escape_string($con, $new_password);

        $sql_update = "UPDATE `reg` SET `reg_password`='$hashed_password' WHERE `reg_email`='$email'";

        if (mysqli_query($con, $sql_update)) {
            echo "
            <!DOCTYPE html>
            <html>
            <head>
                <style>
                    body { background-color: black; color: white; text-align: center; }
                    .container { margin: 50px auto; max-width: 400px; padding: 20px; background-color: #333; border-radius: 8px; }
                    h1 { font-size: 24px; margin-bottom: 20px; }
                    .home-button { background-color: #008CBA; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
                    .home-button:hover { background-color: #007bb5; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h1>Password Updated Successfully</h1>
                    <form action='http://localhost/demo/HTML/CIA%20project%20BBC.php' method='get'>
                        <button type='submit' class='home-button'>Go Back Home</button>
                    </form>
                </div>
            </body>
            </html>";
        } else {
            echo "Error updating password: " . mysqli_error($con);
        }
    } else {
        echo "Password cannot be empty.";
    }
} else {
    $email = $_GET['email'];
    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body { background-color: black; color: white; text-align: center; }
            .container { margin: 50px auto; max-width: 400px; padding: 20px; background-color: #333; border-radius: 8px; }
            input[type='password'], button { padding: 10px; font-size: 16px; margin-top: 20px; }
            button { background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; }
            button:hover { background-color: #45a049; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Update Password</h1>
            <form method='post' action=''>
                <input type='hidden' name='email' value='$email'>
                <input type='password' name='new_password' placeholder='Enter New Password' required>
                <button type='submit'>Update Password</button>
            </form>
        </div>
    </body>
    </html>";
}

mysqli_close($con);
?>
