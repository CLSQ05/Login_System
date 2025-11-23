<?php
session_start();
$file = 'users.txt';
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$valid = false;

if (file_exists($file)) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        list($savedUser, $savedPass) = explode('|', $line);
        if ($savedUser == $username && $savedPass == $password) {
            $valid = true;
            break;
        }
    }
}

if ($valid) {
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['message'] = "Welcome, $username! You are now logged in!";
    header('Location: homepage.php');
} else {
    $_SESSION['message'] = 'Invalid username or password!';
    $_SESSION['invalid_login'] = true;
    header('Location: index.php');
}
exit();
?>