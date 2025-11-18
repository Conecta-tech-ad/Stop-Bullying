<?php
session_start();
require "conectar.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM users WHERE email=? AND senha=SHA2(?,256)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $senha);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['nome'] = $user['nome'];
    $_SESSION['role'] = $user['role'];

    header("Location: ../" . ($user['role'] == 'admin' ? "admin.html" : "dashboard.html"));
    exit;
} else {
    echo "Login inválido!";
}
?>
