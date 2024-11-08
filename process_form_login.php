<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $maskedPassword = str_repeat('*', strlen($password));

    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body { 
                background-color: black; 
                color: #f0f0f5; 
                font-family: Arial, sans-serif; 
                text-align: center;
                margin: 0;
                padding: 0;
            }
            h1 {
                font-size: 24px;
                margin-bottom: 20px;
            }
            p {
                font-size: 18px;
                margin: 10px 0;
            }
            button {
                background-color: #4CAF50; 
                color: white; 
                padding: 10px 20px; 
                border: none; 
                border-radius: 5px; 
                cursor: pointer;
                margin-top: 20px;
            }
            button:hover {
                background-color: #45a049;
            }
            .container {
                margin: 50px auto;
                max-width: 400px;
                padding: 20px;
                background-color: #333; /* Container background color */
                border-radius: 8px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Logged in Successfully</h1>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Password:</strong> $maskedPassword</p>
            <button onclick=\"window.location.href='http://localhost/demo/HTML/CIA%20project%20BBC.php';\">Go to Homepage</button>
        </div>
    </body>
    </html>";
} else {
    header("Location: LoGiN.html");
    exit();
}
?>
