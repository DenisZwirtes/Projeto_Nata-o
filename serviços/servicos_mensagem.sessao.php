<?php
session_start();
// setar= definir valor
function setar_mensagem_erro(string $mensagem): void
{
    $_SESSION['mensagem de erro'] = $mensagem;
}
// no retorno da funçao o "?" é um método
//curinga que serve para dizer que pode ser null também
function obter_mensagem_erro(): ?string
{
    if (isset($_SESSION['mensagem de erro']))
        return $_SESSION['mensagem de erro'];
    return null;
}
