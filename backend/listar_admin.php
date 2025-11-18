<?php
require "conectar.php";

$sql = "SELECT denuncias.texto, users.nome FROM denuncias 
        JOIN users ON users.id = denuncias.user_id";

$result = $conn->query($sql);

echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>
