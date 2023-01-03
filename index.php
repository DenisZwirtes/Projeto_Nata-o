<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
</head>

<body>
    <p>Formulário Para Inscrição de Competidores</p>
    <form action="script.php" method="post">
        <?php
        $mensagem_de_erro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : '';
        if (!empty($mensagem_de_erro)) {
            echo $mensagem_de_erro;
        };
        ?>
        <p>Seu Nome <input type="text" name="nome" /></p>
        <p>Sua Idade<input type="text" name="idade" /></p>
        <br><button type="submit">Enviar Dados</button>
    </form>

</body>

</html>