<?php
$title = "ATUALIZAÇÃO SQL"; 
include 'cabecalho.php';
?>

            <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
                    <?php
                    $nome = $_POST['txtNome'];
                    $senha = $_POST['txtSenha'];
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "agenda8dsi";
                    $conexao = new mysqli($servername, $username, $password, $dbname);

                    if ($conexao->connect_error) {
                        die("Connection failed: " . $conexao->connect_error);}

                $sql = "SELECT * FROM usuario WHERE nome = '".$nome."';";
                $resultado = $conexao->query($sql);
                $linha = mysqli_fetch_array($resultado);

                if($linha != null) {
                    if($linha['senha'] == $senha) {
                        echo '<h1 class="w3-button w3-teal">Bem-vindo, '.$nome.'!</h1>';
                        echo '<a href="principal.php" class="w3-button w3-teal">Continuar</a>';
                    } else {
                        echo '<h1 class="w3-button w3-teal">Login Inválido!</h1>';
                        echo '<a href="index.php" class="w3-button w3-teal">Tentar Novamente</a>';}
                } else {
                    echo '<h1 class="w3-button w3-teal">Login Inválido!</h1>';
                    echo '<a href="index.php" class="w3-button w3-teal">Tentar Novamente</a>';}

                $conexao->close();
                ?>
            </div>

<?php
include 'rodape.php';
?> 