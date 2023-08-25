<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Cadastro Login</title>
</head>
<body>
    <h1>Cadastre seu Email</h1>
    <?php
        if(isset($_SESSION['msg']))
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
    ?>
    <form action="processa.php" class="formulario" method="post"></form>
    <div class="field">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
    </div>
    <div class="field">
        <label for="nome">Email</label>
        <input type="email" id="email" name="email" placeholder="Digite seu Email" required>
    </div>
        <input type="submit" name="acao" value="Cadastrar">
</form>
</body>
</html>