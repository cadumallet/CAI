<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'ricardoc';


$conn = new mysqli($host, $usuario, $senha, $database);
if ($conn->connect_error) {
    die("falha ao conectar ao banco de dados: " . $conn->error);
}
?>