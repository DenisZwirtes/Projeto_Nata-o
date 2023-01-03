<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
    echo "O campo não pode ser Vazio!";
    return;
}
if (strlen($nome) < 3 || strlen($nome) > 40) {
    echo "O campo deve conter de 3 a 40 caracteres";
    return;
}
if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'infantil') {
            echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
        }
    }
} elseif ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente') {
            echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
        }
    }
} else {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adulto') {
            echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
        }
    }
}
