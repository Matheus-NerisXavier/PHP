<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Matheus',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Lucas',
        'saldo' => 10000
    ],
    '123.456.789-12' => [
        'titular' => 'Roberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes['123.456.789-12'], 100);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 1000);

$contasCorrentes['123.456.789-12'] = depositar(
    $contasCorrentes['123.456.789-12'], 900
);

unset($contasCorrentes['123.456.789-10']);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-12']);
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3>
                <?=$conta['titular'];?> - <?= $cpf; ?>
            </h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>
