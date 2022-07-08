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

            // n_array() retorna true ou false para oque esta sendo procurado
            echo in_array('laranja',$lista['frutas']);
            echo '<br>';
            // false  null
            echo array_search('morango',$lista['frutas'])



        ?>
    </body>
</html>
