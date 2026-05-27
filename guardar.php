<?php
$conn = new mysqli("localhost", "root", "", "comida_domicilio");

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$pedido = $_POST['pedido'];

$sql = "INSERT INTO pedidos (nombre_cliente, direccion, telefono, pedido, estado) 
VALUES ('$nombre', '$direccion', '$telefono', '$pedido', 'Pendiente')";

$conn->query($sql);

header("Location: index.php");
?>