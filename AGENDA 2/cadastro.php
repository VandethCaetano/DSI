<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>cadastro</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <h2>Cadastro</h2>
    </div>

    <form class="w3-container" method="post" action="acao.php">
        <label class="w3-text-teal"><b>Nome</b></label>
        <input class="w3-input w3-border w3-light-grey" name="nome" type="text">

        <label class="w3-text-teal"><b>Sobrenome</b></label>
        <input class="w3-input w3-border w3-light-grey" name="sobrenome" type="text">

        <label class="w3-text-teal"><b>Email</b></label>
        <input class="w3-input w3-border w3-light-grey" name="email" type="text">

        <label class="w3-text-teal"><b>Formação</b></label>
        <input class="w3-input w3-border w3-light-grey" name="formacao" type="text">

        <label class="w3-text-teal"><b>Descrição Último Emprego</b></label>
        <input class="w3-input w3-border w3-light-grey" name="descri" type="text">
      

        <br>
        <button class="w3-btn w3-blue-grey">Enviar</button>
    </form>
</body>
</html>
