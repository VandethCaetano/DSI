<?php
$title = "ATUALIZAÇÃO SQL"; 
include 'cabecalho.php';
?>

            
        <a href="index.php" class="w3-display-topleft"><i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-xxlarge"></i>
        </a>
        
            <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = ""; 
                    $dbname = "agenda8dsi";
                    $conexao = new mysqli($servername, $username, $password, $dbname);

                if ($conexao->connect_error) {
                    die("Connection failed: " . $conexao->connect_error);
                    }

                 echo '

                    <div class="w3-padding w3-text-grey w3-half w3-display-middle w3-center " >

                        <h1 class="w3-center w3-teal w3-round-large" >Listagem de Amigos</h1>

                        <table class="w3-table-all w3-centered">
                            <thead>
                                <tr class="w3-center w3-teal">
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>Apelido</th>
                                    <th>Email</th>
                                    <th>Excluir</th>
                                    <th>Atualizar</th>
                                </tr>
                            </thead>
                            <tbody>
                    ';

                $sql = "SELECT * FROM amigo" ;
                $resultado = $conexao->query($sql);
                
                if ($resultado->num_rows > 0) {
                    while ($linha = $resultado->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($linha['idamigo']) . '</td>';
                        echo '<td>' . htmlspecialchars($linha['nome']) . '</td>';
                        echo '<td>' . htmlspecialchars($linha['apelido']) . '</td>';
                        echo '<td>' . htmlspecialchars($linha['email']) . '</td>';
                        echo '<td><a href="excluir.php?id=' . urlencode($linha['idamigo']) . '&nome=' . urlencode($linha['nome']) . '&apelido=' . urlencode($linha['apelido']) . '&email=' . urlencode($linha['email']) . '"><i class="fa fa-user-times w3-large w3-text-teal"></i></a></td>';
                        echo '<td><a href="atualizar.php?id=' . urlencode($linha['idamigo']) . '&nome=' . urlencode($linha['nome']) . '&apelido=' . urlencode($linha['apelido']) . '&email=' . urlencode($linha['email']) . '"><i class="fa fa-refresh w3-large w3-text-teal"></i></a></td>';
                        echo '</tr>';
                    }

                } else {
                    echo '<tr><td colspan="6" class="w3-center">Nenhum amigo encontrado.</td></tr>';
                }
                

                echo '
                    </tbody>
                </table>
            </div>';

            $conexao->close();
                     
            ?>

        </div>
<?php
include 'rodape.php';
?> 