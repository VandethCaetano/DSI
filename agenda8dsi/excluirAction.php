<?php
$title = "ATUALIZAÇÃO SQL"; 
include 'cabecalho.php';
?>


    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" id="eProfissional">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = ""; 
        $dbname = "agenda8dsi";

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

<?php
include 'rodape.php';
?> 

