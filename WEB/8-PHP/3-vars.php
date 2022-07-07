<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Curso de php</title>
    </head>
    <body>
        <?php 

        // string
        $nome = 'david';
        //int
        $idade = 23;
        //float
        $peso = 90.6;
        //boolean
        $fumante = false;
        ?>

        <h1>Ficha Cadastral</h1>
        <br>
        <p>nome:    <?= $nome   ?></p>
        <p>idade:   <?= $idade  ?></p>
        <p>peso:    <?= $peso   ?></p>
        <p>fumante: <?= $fumante ?></p>

        
        
    </body>
</html>
