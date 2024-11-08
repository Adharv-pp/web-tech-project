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
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $maskedPassword = str_repeat('*', strlen($password));

    if (isset($_POST['insert'])) {
        $reg_fullname = mysqli_real_escape_string($con, $fullname);
        $reg_email = mysqli_real_escape_string($con, $email);
        $reg_password = mysqli_real_escape_string($con, $password);

        $sql_insert = "INSERT INTO `reg` (`reg_fullname`, `reg_email`, `reg_password`) VALUES ('$reg_fullname', '$reg_email', '$reg_password')";

        if (mysqli_query($con, $sql_insert)) {
            echo "
            <!DOCTYPE html>
            <html>
            <head>
                <style>
                    body { background-color: black; color: white; text-align: center; }
                    .container { margin: 50px auto; max-width: 400px; padding: 20px; background-color: #333; border-radius: 8px; }
                    h1 { font-size: 24px; margin-bottom: 20px; }
                    button { background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-top: 20px; }
                    button:hover { background-color: #45a049; }
                    .home-button { background-color: #008CBA; }
                    .home-button:hover { background-color: #007bb5; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h1>Registered Successfully</h1>
                    <p><strong>Fullname:</strong> $reg_fullname</p>
                    <p><strong>Email:</strong> $reg_email</p>
                    <p><strong>Password:</strong> $maskedPassword</p>
                    <form action='http://localhost/demo/HTML/CIA%20project%20BBC.php' method='get'>
                        <button type='submit' class='home-button'>Go Back Home</button>
                    </form>
                </div>
            </body>
            </html>";
        } else {
            echo "Error inserting entry: " . mysqli_error($con);
        }
    }

    if (isset($_POST['update'])) 
    {
        $email = $_POST['email'];
        header("Location: updatereg_password.php?email=$email");
        exit();
    }

    if (isset($_POST['delete'])) 
    {
        $email = $_POST['email'];
        header("Location: deletereg_success.php?email=$email");
        exit();
    }
}

mysqli_close($con);
?>
