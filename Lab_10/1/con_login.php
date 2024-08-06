<?php
session_start();
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $static_username = 'user';
    $static_password = 'password';

    if (empty($username)) {
        $errors['username'] = 'Username is required';
    }

    if (empty($password)) {
        $errors['password'] = 'Password is required';
    }

    if (empty($errors)) {
        if ($username == $static_username && $password == $static_password) {
            $_SESSION['username'] = $username;
            header('Location: welcome.php');
            exit;
        } else {
            $errors['login'] = 'Invalid username or password';
            header('Location: login.php');
        }
    }
}
?>