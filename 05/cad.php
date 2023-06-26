<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Result</title>
</head>
<body>
    <header>
        <h1>Result</h1>
    </header>
    <main>
    <?php 
    $nome = $_GET["nome"] ?? "Sem nome";
    $sobrenome = $_GET["sobrenome"] ?? "Sem Sobrenome";

    echo  "Olá <strong> $nome, </strong> seu sobrenome é <strong> $sobrenome, </strong> e muito obrigado pela colaboração!";
    ?>
    <p><a href="javascript:history.go(-1)">Retornar para a página anterior.</a></p>
    
    </main>
</body>
</html>