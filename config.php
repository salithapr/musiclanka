<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_management";

// MySQL සම්බන්ධතාවය නිර්මාණය කරන්න
$conn = new mysqli($servername, $username, $password, $dbname);

// සම්බන්ධතාවය පරීක්ෂා කරන්න
if ($conn->connect_error) {
    die("සම්බන්ධතාවය අසාර්ථකයි: " . $conn->connect_error);
}
?>
