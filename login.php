<?php
session_start();
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Database එකේ ඇති පාස්වර්ඩ් සමඟ පරිශීලකයා ලබා දුන් පාස්වර්ඩ් එක සෘජුවම පරීක්ෂා කිරීම
        if ($password == $row['password']) { 
            $_SESSION['username'] = $username; // Session variable එකක් සකස් කිරීම
            header("Location: welcome.php"); // Redirect to welcome page
            exit();
        } else {
            echo "වැරදි පාස්වර්ඩ්!";
        }
    } else {
        echo "ගිණුමක් නොමැත!";
    }
}
?>

<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
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
        <h1>LOGIN PAGE</h1>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="username" required><br>
            <input type="password" name="password" placeholder="password" required><br>
            <button type="submit">Login</button>
        </form>
        <button onclick="window.location.href='signup.php'">create account</button>
    </div>
</body>
</html>
