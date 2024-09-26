<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Aluno concluinte</title>
        <style>
            
        /* MARGEM*/
            .table-container {
                margin: 20px auto;
                width: 80%;
            }
        </style>
    </head>

<body class="w3-black">
    <div class="w3-padding w3-content w3-half w3-display-topmiddle table-container">
        <h1 class="w3-center w3-blue w3-round-large">Alunos Concluintes</h1>
        <table class="w3-table-all w3-centered w3-text-black">
            <thead>
                <tr class="w3-center w3-blue">
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Nota1</th>
                    <th>Nota2</th>
                    <th>Nota3</th>
                    <th>Nota4</th>

                </tr>
            </thead>

            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "agenda6dsi";
     
            // CONEXÃO
                $conexao = new mysqli($servername, $username, $password, $dbname);

            // VERIFICA
                if ($conexao->connect_error) {
                    die("Connection failed: " . $conexao->connect_error);
                }

            // CONSULTA
                $sql = "SELECT * FROM aluno_concluinte";
                $resultado = $conexao->query($sql);

            // VERIFICA
                if ($resultado && $resultado->num_rows > 0) {
                    while ($linha = $resultado->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($linha['id_aluno']) . '</td>';
                        echo '<td>' . htmlspecialchars($linha['nome']) . '</td>';
                        echo '<td>' . htmlspecialchars($linha['nota1']) . '</td>';
                        echo '<td>' . htmlspecialchars($linha['nota2']) . '</td>';
                        echo '<td>' . htmlspecialchars($linha['nota3']) . '</td>';
                        echo '<td>' . htmlspecialchars($linha['nota4']) . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="3" class="w3-center">Nenhum jogo encontrado.</td></tr>';
                }

            // FECHAMENTO
                $conexao->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
