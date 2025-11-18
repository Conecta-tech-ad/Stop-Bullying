<?php
session_start();
require "conectar.php";

$user = $_SESSION['id'];

$sql = "SELECT texto, data FROM denuncias WHERE user_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user);
$stmt->execute();

echo json_encode($stmt->get_result()->fetch_all(MYSQLI_ASSOC));
?>
