<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Curso de php</title>
    </head>
    <body>
        <?php 
            $valor = 15.3;
            $valor2 =  (int) $valor;
            
            echo $valor2 .' = ' . gettype($valor2) . ' / ' . $valor ." = " . gettype($valor);
            echo '<br>';
            echo '<br>';
            $valor = 15.3;
            $valor2 =  (string) $valor;

            echo $valor2 .' = ' . gettype($valor2) . ' / ' . $valor ." = " . gettype($valor);
            echo '<br>';
            echo '<br>';

            $valor = '';
            $valor2 =  (float) $valor;

            echo $valor2 .' = ' . gettype($valor2) . ' / ' . $valor ." = " . gettype($valor);

        ?>
    </body>
</html>
