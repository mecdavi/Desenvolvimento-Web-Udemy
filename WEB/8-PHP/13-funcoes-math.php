<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Curso de php</title>
    </head>
    <body>
        <?php 
            // funcoes nativas
            // gera um numero aleátorio
            $numero = rand(5,15)/10;

            echo $numero;
            echo '<br>';

            // arredonda pra cima
            echo ceil($numero);
            echo '<br>';

            // arredonda dependendo das casa decimais
            echo round($numero);
            echo '<br>';
            
            // arredonda pra baixo
            echo floor($numero);
            echo '<br>';

            // raiz do numero 
            echo sqrt($numero);

            
            
        ?>
    </body>
</html>
