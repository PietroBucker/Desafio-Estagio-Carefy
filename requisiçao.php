<?php
    //Chave de acesso para api
    $chave = "sua_chave_de_acesso";

    //ID da planilha do Google Sheets
    $id = "sua_id_da_planilha";

    //Nome da aba da planilha
    $aba = "sua_aba_da_planilha";
    //intervalo das células da planilha
    $intervalo = "A1:Z1000";

    //URL da API do Google Sheets
    $url = "https://sheets.googleapis.com/v4/spreadsheets/$spreadsheet_id/values/$sheet_name!$intervalo?key=$api_key";


    //Criação da requisição
    $requisicao = curl_init();

    //Configuração da requisição
    curl_setopt($requisicao, CURLOPT_URL, $url);
    curl_setopt($requisicao, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($requisicao, CURLOPT_SSL_VERIFYPEER, false);

    //Execução da requisição
    $resposta = curl_exec($requisicao);

    //Fechamento da requisição
    curl_close($requisicao);

    //Decodificação da resposta
    $resposta = json_decode($resposta);
    

?>