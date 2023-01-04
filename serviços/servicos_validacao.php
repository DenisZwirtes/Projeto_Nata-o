<?php

function valida_nome(string $nome): bool
{
    if (empty($nome)) {
        $_SESSION['mensagem de erro'] = "Nenhum campo não pode estar Vazio, preencha novamente!";
        return false;
    } else if (strlen($nome) < 3 || strlen($nome) > 30) {
        $_SESSION['mensagem de erro'] = "O campo deve conter de 3 a 30 caracteres";
        return false;
    }
    return true;
}
function valida_idade(string $idade): bool
{
    if (!is_numeric($idade)) {
        $_SESSION['mensagem de erro'] = "Campo Idade deve ser preenchido com Números!";
        return false;
    }
    return true;
}
