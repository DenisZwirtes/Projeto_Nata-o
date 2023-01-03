<?php
session_start();
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
    $_SESSION['mensagem de erro'] = "Nenhum campo não pode estar Vazio, preencha novamente!";
    header('location: index.php');
    return;
} else if (strlen($nome) < 3 || strlen($nome) > 30) {
    $_SESSION['mensagem de erro'] = "O campo deve conter de 3 a 30 caracteres";
    header('location: index.php');
    return;
} else if (!is_numeric($idade)) {
    $_SESSION['mensagem de erro'] = "Campo Idade deve ser preenchido com Números!";
    header('location: index.php');
    return;
}
if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'infantil') {
            $_SESSION['mensagem de sucesso'] =  "O nadador " . $nome . " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
} elseif ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente') {
            $_SESSION['mensagem de sucesso'] = "O nadador " . $nome . " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
} else {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adulto') {
            $_SESSION['mensagem de sucesso'] = "O nadador " . $nome . " compete na categoria " . $categorias[$i];
            header('location: index.php');
            return;
        }
    }
}
