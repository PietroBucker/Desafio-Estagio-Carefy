<?php
include 'requisicao.php';

    //acesso aos valores da panilha
    $valores = $resposta->values;

    //excluindo quem ja saiu da empresa
    $valores_filtrados = array_filter($valores, function($linha) {
        return $linha[3] === null;
    });
    
    //pegando em forma de coluna os dados
    $dados = array_column($valores_filtrados, null);
?>