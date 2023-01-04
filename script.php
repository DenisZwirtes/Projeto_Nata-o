<?php

include "serviços/servicos_mensagem_sessao.php";
include "serviços/servicos_validacao.php";
include "serviços/servico_categoria_competidor.php";


$nome = $_POST['nome'];
$idade = $_POST['idade'];

define_categoria_competidor($nome, $idade);

header('location:index.php');
