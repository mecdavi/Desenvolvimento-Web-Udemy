<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Curso de php</title>
    </head>
    <body>
        <?php 
            $numeros_loteria = [];
            
            for($i = 0; count($numeros_loteria) <= 6; $i++){
                $numero = rand(0,60);
                in_array($numero, $numeros_loteria) ? '': $numeros_loteria [] = $numero;
            }

            echo '<pre>';
            print_r($numeros_loteria);
            echo '</pre>';
        //*/

        ?>
    </body>
</html>
