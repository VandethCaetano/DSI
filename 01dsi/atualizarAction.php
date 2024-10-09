<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Atualização - MYSQLI</title>
</head>
<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
        <?php
        // Configurações do banco de dados
        $servername = "localhost";
        $username = "root";
        $password = ""; 
        $dbname = "pwii";

        // Criar conexão
        $conexao = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexão
        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        }

        // Preparar a consulta SQL
        if (isset($_POST['txtID']) && isset($_POST['txtNome']) && isset($_POST['txtApelido']) && isset($_POST['txtEmail'])) {
            $stmt = $conexao->prepare("UPDATE amigo SET nome = ?, apelido = ?, email = ? WHERE idamigo = ?");
            $stmt->bind_param("sssi", $_POST['txtNome'], $_POST['txtApelido'], $_POST['txtEmail'], $_POST['txtID']);

            // Executar a consulta
            if ($stmt->execute()) {
                echo '
                <a href="listar.php">
                    <h1 class="w3-button w3-teal">Amigo Atualizado com sucesso!</h1>
                </a>
                ';
            } else {
                echo '
                <a href="listar.php">
                    <h1 class="w3-button w3-teal">ERRO!</h1>
                </a>
                ';
            }

            // Fechar o statement
            $stmt->close();
        }

        // Fechar a conexão
        $conexao->close();
        ?>
    </div>
</body>
</html>
