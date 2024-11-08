<?php
$host = "localhost";
$username = "root";
$password_db = "";
$dbname = "project abc";

$con = mysqli_connect($host, $username, $password_db, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $maskedPassword = str_repeat('*', strlen($password));

    if (isset($_POST['insert'])) {
        $login_email = mysqli_real_escape_string($con, $email);
        $login_paswrd = mysqli_real_escape_string($con, $password);

        $sql_insert = "INSERT INTO `login` (`login_email`, `login_paswrd`) VALUES ('$login_email', '$login_paswrd')";
        
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
                    <h1>Logged in Successfully</h1>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Password:</strong> $maskedPassword</p>
                    <form method='post' action='process_form.php'>
                        <input type='hidden' name='email' value='$login_email'>
                        <button type='submit' name='update'>UPDATE</button>
                        <button type='submit' name='delete'>DELETE</button>
                    </form>
                    <br><br>
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

    if (isset($_POST['update'])) {
        $email = $_POST['email'];
        header("Location: update_password.php?email=$email");
        exit();
    }

    if (isset($_POST['delete'])) {
        $email = $_POST['email'];
        header("Location: delete_success.php?email=$email");
        exit();
    }
}

mysqli_close($con);
?>
