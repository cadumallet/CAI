<?php
include("cfg.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div>
        <form method="POST" action="lanc.php">
            <div class="mb-3">
                <label for="Lanc_data" class="form-label">Data</label>
                <input type="date" name="Lanc_data" class="form-control" id="Lanc_data">
            </div>
            <div class="mb-3">
                <label for="Lanc_conta" class="form-label">Conta</label>
                <select name="Lanc_conta">
                    <?php
                    $sql = "SELECT Conta_id, Conta_nome FROM contas WHERE Conta_Sintetica = 0";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['Conta_id'] . "'>" . $row['Conta_nome'] . "</option>";
                    }
                    ?>
                </select>
                <div class="mb-3">
                <label for="Lanc_tipo" class="form-label">Tipo</label>
                <select name="Lanc_tipo" >
                    <option value="1">Débito</option>
                    <option value="0">Crédito</option>

                </select>
            </div>
            </div>
            <div class="mb-3">
                <label for="Lanc_valor" class="form-label">Valor</label>
                <input type="text" name="Lanc_valor" class="form-control" id="Lanc_valor">
            </div>
            <div class="mb-3">
                <label for="Lanc_historico" class="form-label">Histórico</label>
                <input type="text" name="Lanc_historico" class="form-control" id="Lanc_historico">
            </div>
            
            <button type="submit" class="btn btn-primary">Criar</button>


        </form>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>