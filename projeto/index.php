<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Variáveis em PHP</title>
</head>
<body>
    <?php 
        $string = "Curso de PHP";
        $numero = 100;
        $cursos = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];
        date_default_timezone_set('America/Sao_Paulo');
        $data = date("d/m/Y H:i"); 
    ?>
    <h4>
        Essa é uma variável do tipo String.<br>
        Para implementar uma variável do tipo string,<br>
        utilizamos aspas simples ('') ou aspas duplas ("")<br>
        => <?= $string ?>
    </h4>
    <h4>
        Essa é uma variável do tipo Numérico.<br>
        Para implementar essa variável numérica,<br>
        utilizamos os números dessa forma<br>
        => <?= $numero ?>
    </h4>
    <h4>
        Essa é uma variável do tipo Array.<br>
        Para implementarmos um array,<br>
        utilizamos o seguinte formato<br>
        => 
        <pre>
        <?php print_r($cursos); ?>
        </pre>
    </h4>
    <h4>
        Essa é uma variável do tipo Data.<br>
        Para implementarmos essa variável<br>
        utilizamos o seguinte formato
        => <?= $data ?>
    </h4>
</body>
</html>