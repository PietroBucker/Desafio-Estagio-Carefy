<?php

//importando os arquivos
include './helper.php';
include './requisicao.php';

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
            <?php foreach ($dados as $dado) : ?>
                <tbody>
                    <tr>
                        <td><?= $dado[0] ?></td>
                        <td><?= $dado[1] ?></td>
                        <td><?= $dado[2] ?></td>
                    </tr>
                </tbody>
                    <?php endforeach; ?>
    </main>
</body>
</html>