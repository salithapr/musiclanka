<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        // Hash නොකර සජීව පාස්වර්ඩ් එක ගබඩා කරනවා.
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "ගිණුම සාර්ථකව සාදන ලදී!";
        } else {
            echo "දෝෂයක් සිදු විය: " . $conn->error;
        }
    } else {
        echo "පාස්වර්ඩ් නොගැලපේ!";
    }
}
?>


<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        .container {
            margin-top: 50px;
        }
        input {
            padding: 10px;
            width: 80%;
            margin: 10px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CREATE ACCOUNT</h1>
        <form action="signup.php" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="email" name="email" placeholder="E-mail" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="confirm_password" placeholder="Conform password" required><br>
            <button type="submit">Create account</button>
        </form>
        <button onclick="window.location.href='login.php'">Login</button>
    </div>
</body>
</html>
