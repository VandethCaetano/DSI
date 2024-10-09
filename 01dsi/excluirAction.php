<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Exclusão - MYSQLI</title>
</head>
<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" id="eProfissional">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = ""; 
        $dbname = "pwii";

        // CONEXÃO
        $conexao = new mysqli($servername, $username, $password, $dbname);

        // VERIFICA
        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        }

        // PREPARA PARA EXCLUIR
        if (isset($_POST['txtID'])) {
            $stmt = $conexao->prepare("DELETE FROM amigo WHERE idamigo = ?");
            $stmt->bind_param("i", $_POST['txtID']); // "i" indica que é um inteiro
            $result = $stmt->execute();

            // VERIFICA
            if ($result) {
                echo '
                <a href="listar.php">
                    <h1 class="w3-button w3-teal">Amigo Excluído com sucesso!</h1>
                </a>
                ';
            } else {
                echo '
                <a href="listar.php">
                    <h1 class="w3-button w3-teal">ERRO!</h1>
                </a>
                ';
            }

            $stmt->close();
        }

        $conexao->close();
        ?>
    </div>
</body>
</html>

