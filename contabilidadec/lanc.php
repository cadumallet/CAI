<?php
include("cfg.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Lanc_data = $_POST ["Lanc_data"];
    $Lanc_conta = $_POST ["Lanc_conta"];
    $Lanc_valor = $_POST ["Lanc_valor"];
    $Lanc_historico = $_POST ["Lanc_historico"];
    $Lanc_tipo = $_POST ["Lanc_tipo"];
    
    
    
    
    
    $sql = "INSERT INTO lancamentos (Lanc_data, Lanc_conta, Lanc_valor , Lanc_historico, Lanc_tipo ) VALUES ('{$Lanc_data}', '{$Lanc_conta}','{$Lanc_valor}','{$Lanc_historico}','{$Lanc_tipo}')";
    $res = $conn->query($sql);
}


?> 