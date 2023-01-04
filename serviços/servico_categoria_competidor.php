<?php




function define_categoria_competidor(string $nome, string $idade): ?string
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';

    if (valida_nome($nome) && valida_idade($idade)) {
        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'infantil') {
                    setar_mensagem_sucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);

                    return null;
                }
            }
        } elseif ($idade >= 13 && $idade <= 18) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'adolescente') {
                    setar_mensagem_sucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);

                    return null;
                }
            }
        } else {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'adulto') {
                    setar_mensagem_sucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);

                    return null;
                }
            }
        }
    } else {
        obter_mensagem_erro();
    }
}
