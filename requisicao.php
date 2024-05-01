<?php
    //Chave de acesso para api
    $chave = "sua chave da api aqui";

    //ID da planilha do Google Sheets
    $id = "1-fWXw-8tuKHiDdaSmNIUnNcRrcah2D8Bw_zaME0HxpM";

    //Nome da aba da planilha
    $aba = "Página1";
    //intervalo das células da planilha
    $intervalo = "A1:D20";

    //URL da API do Google Sheets
    $url = "https://sheets.googleapis.com/v4/spreadsheets/$id/values/$aba!$intervalo?key=$chave";


    //Criação da requisição
    $requisicao = curl_init();

    //Configuração da requisição
    curl_setopt($requisicao, CURLOPT_URL, $url);
    curl_setopt($requisicao, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($requisicao, CURLOPT_SSL_VERIFYPEER, false);

    //Execução da requisição
    $resposta = curl_exec($requisicao);

    if (curl_errno($requisicao)) {
        echo 'Erro ao fazer a requisição: ' . curl_error($requisicao);
    }
    //Fechamento da requisição
    curl_close($requisicao);

    //Decodificação da resposta
    $data = json_decode($resposta);
?>