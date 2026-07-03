<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charser="UTF-8">
    <title>Strings</title>
    <style>
        .center {
            display: grid;
            place-items: center;
        }
    </style>
</head>
<body class="center">
    <h2>Strings 1:</h2>
    <h3>Entrada original</h3>
    <p>
        <?= $nomeBruto ?>
    </p>
    <h3>Entrada formatada</h3>
    <p>
        <?= $nomeFormatado ?>
    </p>
    <p><?= $len ?></p>

    <h2>Strings 2:</h2>
    <h3>Tags Brutas</h3>
    <p>
        <?= $tagsBrutas ?>
    </p>
    <h3>Tags Limpas</h3>
    <p>
        <?= $tagsLimpas ?>
    </p>

    <h2>Strings 3:</h2>
    <h3>Descrição Bruta</h3>
    <p>
        <?= $descricaoBruta ?>
    </p>
    <h3>Descrição Limpa</h3>
    <p>
        <?= $descricaoLimpa ?>
    </p>
    <p>
        Contém a palavra "novo": <?= $strValidation ?>
    </p>
    <p>
        Inicia com a palavra "Novo": <?= $strInitialValidation ?>
    </p>
    <p>
        Termina com a palavra "Novo": <?= $strFinalValidation ?>
    </p>

    <h2>Strings 4:</h2>
    <h3>Texto - Entrada original</h3>
    <p>
        <?= $texto ?>
    </p>
    <h3>Texto - Entrada formatada</h3>
    <p>
        <?= $textoFormatado ?>
    </p>
    <h3>Email - Entrada original</h3>
    <p>
        <?= $email ?>
    </p>
    <h3>Email - Entrada formatada</h3>
    <p>
        <?= $emailFormatado ?>
    </p>
    
</body>
</html>