<?php
session_start();
session_unset(); // සියලුම session data ඉවත් කරන්න
session_destroy(); // Session එක අවසන් කරන්න

header("Location: login.php"); // Login පිටුවට යොමු වේ
exit();
?>
