<?php
$host = "localhost";
$username = "root";
$password_db = "";
$dbname = "project abc";

$con = mysqli_connect($host, $username, $password_db, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $email = $_GET['email'];

    $sql_delete = "DELETE FROM `reg` WHERE `reg_email`='$email'";

    if (mysqli_query($con, $sql_delete)) {
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
                <h1>Account Deleted Successfully</h1>
                <form action='http://localhost/demo/HTML/CIA%20project%20BBC.php' method='get'>
                    <button type='submit' class='home-button'>Go Back Home</button>
                </form>
            </div>
        </body>
        </html>";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
