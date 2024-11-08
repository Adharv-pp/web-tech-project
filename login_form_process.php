<?php

$emailErr = $passwordErr = "";
$email = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = input_data($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = input_data($_POST["password"]);
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters long";
        }
    }


    if ($emailErr == "" && $passwordErr == "") {
        
        header('Location: process_form.php');
        
    }
}


function input_data($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
    <span><?php echo $emailErr; ?></span>
    <br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <span><?php echo $passwordErr; ?></span>
    <br>
    
    <input type="submit" value="Login">
</form>

</body>
</html>
