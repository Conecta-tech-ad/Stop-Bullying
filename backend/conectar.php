<?php
$conn = new mysqli("localhost", "root", "", "stopbullying");

if ($conn->connect_error) {
    die("Erro ao conectar: " . $conn->connect_error);
}
?>
