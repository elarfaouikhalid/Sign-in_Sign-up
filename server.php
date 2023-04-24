<?php
session_start();
$errors = [];

try {
    $pdo = new PDO('mysql:host=localhost;dbname=registre', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password'];
    $password2 = $_POST['password2'];

    if(empty($username) || empty($email) || empty($password1) || $password1 != $password2) {
        array_push($errors, 'Information is required');
    } else {
        $stmt = $pdo->prepare("INSERT INTO user(username, email, password) values(?, ?, ?)");
        $password_hash = password_hash($password1, PASSWORD_DEFAULT);
        $stmt->execute([$username, $email, $password_hash]);
        $_SESSION['username'] = $username;
        header('location: index1.php');
        exit();
    }
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
    exit();
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        header('location: index1.php');
        exit();
    } else {
        array_push($errors, 'Invalid username or password');
    }
}
