<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO em PHP - Banco</title>
</head>
<body>

    <?php

    require_once 'ContaBanco.php';
    $p1 = new ContaBanco(); // Matheus
    $p2 = new ContaBanco(); // Jorge

    $p1->abrirConta("CC");
    $p1->setNomeDono("Matheus");
    $p1->setNumConta(1211);
    $p1->depositar(300);
    $p1->pagarMensalidade();
    $p1->fecharConta();
    $p1->sacar(338);
    $p1->fecharConta();

    $p2->abrirConta("CP");
    $p2->setNomeDono("Jorge");
    $p2->setNumConta(9887);
    $p2->depositar(500);
    $p2->sacar(100);
    $p2->pagarMensalidade();
    $p2->sacar(530);
    $p2->fecharConta();
    

    echo "<br/>";
    print_r($p1);
    echo "<br/>";
    print_r($p2);
    echo "<br/>";



    ?>
    
</body>
</html>