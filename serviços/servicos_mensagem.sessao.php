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
function setar_mensagem_sucesso(string $mensagem): void
{
    $_SESSION['mensagem de sucesso'] = $mensagem;
}

function obter_mensagem_sucesso(): ?string
{
    if (isset($_SESSION['mensagem de sucesso']))
        return $_SESSION['mensagem de sucesso'];
    return null;
}

function remover_mensagem_erro(): void
{
    if (isset($_SESSION['mensagem de erro']))
        unset($_SESSION['mensagem de erro']);
}
function remover_mensagem_sucesso(): void
{
    if (isset($_SESSION['mensagem de sucesso']))
        unset($_SESSION['mensagem de sucesso']);
}
