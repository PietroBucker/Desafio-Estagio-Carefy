<?php
/*
teste com data de aniversario e data de aniversario de empresa batem no mesmo dia na planilha no tem 
entao fiz o teste com duas datas diferentes mudando as variaveis
$dataExp = '12/09/2001';
$dataExp2 = '19/04/2023';
*/

//importando os arquivos
include './helper.php';
include './requisicao.php';

//pegar a data atual para poder verificar se esta fazendo aniversario
$dataAtual = date('d/m/Y');
//pegando os dados da planilha pelo função getDados no helper
$dados = getDados($data);

// print_r($dados);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>

        <h1>Aniversarios Na Empresa</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Aniversario</th>
                    <th>Aniversario de Empresa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados as $dado) :  
                    $aniversario = ($dado[1] === $dataAtual) ? 'yellow' : ''; 
                    $aniversarioEmpresa = $dado[2]===$dataAtual ? 'red' : '';

                ?>
                    <tr
                    style="
                    background-color: <?= $aniversario ?>;
                    color: <?= $aniversarioEmpresa ?>;
                    "
                    >
                        <td><?= $dado[0] ?></td>
                        <td><?= $dado[1] ?></td>
                        <td><?= $dado[2] ?></td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
    </main>
</body>
</html>