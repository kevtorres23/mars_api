<?php

session_start();

$host = 'localhost';
$user = 'root';
$pass = 'admin123';
$database = 'mars';

// creando la conexión
$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error) {
    die("Conexión Fallida: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT id, username, password FROM users
    WHERE username='$username' AND password='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    header("Location: home.php");
} else {
    echo "Inicio de sesión fallida. <a href='../index.html'>Intentar de nuevo
    <a/>";
}

$conn-> close();
?>