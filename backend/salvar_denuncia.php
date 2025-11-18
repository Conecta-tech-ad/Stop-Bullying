<?php
session_start();
require "conectar.php";

if (!isset($_SESSION['id'])) exit("Erro");

$text = $_POST['texto'];
$user = $_SESSION['id'];

$sql = "INSERT INTO denuncias (user_id, texto) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $user, $text);
$stmt->execute();

echo "OK";
?>
