<?php
require_once './UserController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userController = new UserController();
    $error = $userController->login($email, $password);

    if ($error) {
        echo "<p>$error</p>";
    }
}