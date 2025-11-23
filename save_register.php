<?php
session_start();
$file = 'users.txt';
$username = trim($_POST['username']);
$password = trim($_POST['password']); // Plain text

if (file_exists($file)) {
    $users = file($file, FILE_IGNORE_NEW_LINES);
    foreach ($users as $u) {
        list($savedUser) = explode('|', $u);
        if ($savedUser == $username) {
            $_SESSION['message'] = "Username already exists!";
            header('Location: register.php');
            exit();
        }
    }
}

file_put_contents($file, $username . "|" . $password . PHP_EOL, FILE_APPEND);
$_SESSION['message'] = "Registration Successful!";
header('Location: register.php');
exit();
?>