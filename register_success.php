<?php
$fullname = htmlspecialchars($_GET['fullname']);
$email = htmlspecialchars($_GET['email']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
    <style>
        body { background-color: black; color: white; text-align: center; font-family: Arial, sans-serif; }
        .container { margin: 50px auto; max-width: 400px; padding: 20px; background-color: #333; border-radius: 8px; }
        h1 { font-size: 24px; margin-bottom: 20px; }
        button { background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-top: 20px; }
        button:hover { background-color: #45a049; }
        .home-button { background-color: #008CBA; }
        .home-button:hover { background-color: #007bb5; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registered Successfully</h1>
        <p><strong>Fullname:</strong> <?php echo $fullname; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <form action="http://localhost/demo/HTML/CIA%20project%20BBC.php" method="get">
            <button type="submit" class="home-button">Go Back Home</button>
        </form>
    </div>
</body>
</html>
