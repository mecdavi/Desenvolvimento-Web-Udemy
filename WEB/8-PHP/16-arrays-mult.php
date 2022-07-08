<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Curso de php</title>
    </head>
    <body>
        <?php 
            $lista = [];
                $lista['frutas'] = ['morango','laranja'];
                $lista['pessoas'] = ['joão', 'bruno'];

            echo $lista['frutas'][0];
            echo '<br>';
            echo $lista['pessoas'][0]

        ?>
    </body>
</html>
