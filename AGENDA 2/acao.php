<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Confirmado</title>
    <!-- Link para o CSS do W3Schools -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

    <?php
// ---------------- Ação ---------------- //

    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
    $sobrenome = isset($_POST['sobrenome']) ? htmlspecialchars($_POST['sobrenome']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $formacao = isset($_POST['formacao']) ? htmlspecialchars($_POST['formacao']) : '';
    $descri = isset($_POST['descri']) ? htmlspecialchars($_POST['descri']) : '';

    ?>

<div class="w3-container w3-teal">
    <h2 class="w3-text-white">Cadastro confirmado com sucesso</h2>

    <?php
    echo "Nome: " . $nome . "<br>";
    echo "<Sobrenome: " . $sobrenome . "<br>";
    echo "Email: " . $email. "<br>";
    echo "Formação: " . $formacao. "<br>";
    echo "Descrição Último Emprego: " . $descri. "<br>";
    ?>

</div>

</body>
</html>

